<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App;
use App\Project;
use App\Skill;
use Illuminate\Http\Request;

class ProjectController extends Controller {
	
	public function getIndex($lang, $proyectos = null, $skill_name = null) 
	{
		$projects = Project::orderBy('start', 'desc')->paginate(6);	
		$this->setProjectsLocale($projects);
		$this->getExcerpts($projects, 16);
		
		if ($skill_name != null) 
		{			
			$skill = Skill::where('name', $skill_name)->first();
			if ($skill)
			{
				$projects = $skill->projects()->orderBy('end', 'desc')->paginate(6);
				$this->setProjectsLocale($projects);
				$this->getExcerpts($projects, 16);
				
				return view('projects.home', ['projects' => $projects]);
			} 			
		}

		return view('projects.home', ['projects' => $projects]);  
	}
	
	public function getAdminIndex() 
	{
		$projects = Project::orderBy('end', 'desc')->paginate(6);	
		$this->getExcerpts($projects, 16);
		
		return view('admin.projects.home', ['projects' => $projects]);  
	}
	
	
	public function getSingle($lang, $proyecto = null, $project_slug = null) 
	{
		$project = Project::where('slug', $project_slug)->first();	
		if (!$project) {
			return redirect()->route('proyectos', ["lang" =>App::getLocale() , "proyectos" => __('proyectos')]); 
		}
		$this->setProjectLocale($project);
        
		return view('projects.single', ['project' => $project]);
	}
	public function getSingleAdmin($project_slug = null)
	{
		$project = Project::where('slug', $project_slug)->first();	
		if (!$project) {
			return redirect()->route('admin.projects'); 
		}
		
		return view('admin.projects.single', ['project' => $project]);
	}
	
	public function getAddProject()
	{
		$skills=Skill::all();
		return view('admin.projects.add', ['skills' => $skills]);
	}
	
	public function getUpdateProject($project_id)
	{	
		$project=Project::find($project_id);
		$skills=Skill::all();
		$project_skills = $project->skills;
		$project_skills_ids = array();
		
		$i = 0;
		foreach($project_skills as $project_skill)
		{
			$project_skills_ids[$i] = $project_skill->id;
			$i++;
		}	
		if(!$project)
		{
			return redirect()->route('admin')->with(['error' => 'Proyecto no encontrado']);
		}
		return view('admin.projects.update', ['project' => $project, 'skills' => $skills, 'project_skills' => $project_skills, 'project_skills_ids' => $project_skills_ids]);
	}
	
	public function postAddProject(Request $request)
	{	
		$this->validate($request, [
			'nombre' => 'required|max:50|unique:projects',
			'name' => 'required|max:50|unique:projects',
			'descripcion' => 'required',
			'description' => 'required',
			'url' => 'nullable|url',
			'client' => 'nullable',
			'start' => 'required|date|date_format:Y-m-d',
			'end' => 'nullable|date|date_format:Y-m-d'
		]);
		 
		$project = new Project();
		$project-> nombre = $request['nombre'];
		$project-> name = $request['name'];
		$project-> slug = $this->getSlug($request['nombre']);
		$project-> descripcion = $request['descripcion'];
		$project-> description = $request['description'];
		$project-> freelance = $request["freelance"] ? 1 : 0;
		$project-> url = $request["url"];
		$project->client = $request["client"];
		$project-> start = $request['start']; //(new \DateTime())->format('Y-m-d'); 
		$project-> end = $request['end']; // !== NULL ? $request['end'] : '2100-10-10'; 
		$project->save();
		
		if (strlen($request['skills']) > 0)
		{
			$skills_ids = explode (',', $request['skills']);
			foreach ($skills_ids as $skill_id)
			{
				$project->skills()->attach($skill_id);
			}
		}		 		 
		return redirect()-> route('admin')->with(['success' => 'Proyecto creado']);
		
	}	
	
	public function postUpdateProject(Request $request)
	{  
		$this->validate($request, [
			'nombre' => 'required|max:50',
			'name' => 'required|max:50',
			'descripcion' => 'required',
			'description' => 'required',
			'url' => 'nullable|url',
			'client' => 'nullable',
			'start' => 'required|date|date_format:Y-m-d',
			'end' => 'nullable|date|date_format:Y-m-d'
		]);
		 
		$project = Project::find($request['project_id']);
		$project-> nombre = $request['nombre'];
		$project-> name = $request['name'];
		$project-> slug = $this->getSlug($request['nombre']);
		$project-> descripcion = $request['descripcion'];
		$project-> description = $request['description'];
		$project-> freelance = $request["freelance"] ? 1 : 0;
		$project-> url = $request["url"];
		$project-> client = $request["client"];
		$project-> start = $request['start'];
		$project-> end = $request['end'];
		
		
		$project->update();
		
		$project->skills()->detach();
		if (strlen($request['skills']) > 0)
		{
			$skills_ids = explode (',', $request['skills']);
			foreach ($skills_ids as $skill_id)
			{
				$project->skills()->attach($skill_id);
			}
		}			 		 
		return redirect()-> route('admin') ->with(['success' => 'Proyecto actualizado']);		
	}	
	
	public function getDeleteProject($project_id) {
		$project = Project::find($project_id);
		if (!$project) {
			return redirect()->route('admin')->with(['fail' => 'Proyecto no encontrado']);
		}
		$project->skills()->detach();
		$project->images()->detach();
		if ($project->delete())
		{
			return redirect()-> back() -> with(['success' => 'Proyecto eliminado']);
		}
		return redirect()->back()->with(['fail' => 'No se ha podido eliminar el proyecto']);
	}
	
    
	private function getExcerpts($projects, $words_count)
	{
		foreach ($projects as $project)
			{
				$project->descripcion = $this->getExcerpt($project->descripcion, $words_count);				
				$project->description = $this->getExcerpt($project->description, $words_count);
			}
	}
	/*
	private function getExcerpt($text, $char_count)
	{		
		if (strlen($text) > $char_count )
		{	$text = strip_tags($text);
			$text = substr($text, 0, $char_count). "...";
		}	
		return $text;
	}*/	
	private function getExcerpt($text, $words_count)
    {
	    $text =  strip_tags($text);
        if (str_word_count($text, 0) > $words_count) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$words_count]) . '...';
        }
        return $text;
    }
	
	function getSlug($string){
		return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
	}

	private function setProjectLocale($project)
	{
		if (App::isLocale('es')) {
			$project->description = $project->descripcion;
			$project->name = $project->nombre;
        }
		else {
			$project->descripcion = $project->description;
			$project->nombre = $project->name;
		}
	}
	
	private function setProjectsLocale($projects) {
		foreach ($projects as $project)
		{
			$this->setProjectLocale($project);	
		}
	}
}



