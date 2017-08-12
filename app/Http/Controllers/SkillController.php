<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SkillController extends Controller {

	public function getIndex()
	{
		$skills = Skill::orderBy('created_at', 'desc')->paginate(7);
		return view('admin.projects.skills', ['skills' => $skills]);
	}

	public function postAddSkill(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|unique:skills'
		]);
		$skill = new Skill();
		$skill->name = $request['name'];
		
		if($skill->save()){
			return Response::json(['message'=> "Tecnología creada"], 200);
		}
		return Response::json(['message'=> "Error al crear la tecnología"], 404);
	}
	
	public function postUpdateSkill(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|unique:skills'
		]);
		$skill =Skill::find($request['skill_id']);
		
		
		if(!$skill){
			return Response::json(['message'=> "Tecnología no encontrada"], 404);
		}
		$skill->name = $request['name'];
		$skill->update();
		return Response::json(['message'=> "Tecnología actualizada", 'new_name'=>$request["name"]], 200);
	}
	
	public function getDeleteSkill($skill_id)
	{
		$skill =Skill::find($skill_id);
		if ($skill->delete()) {
			return Response::json(['message'=> "Tecnología eliminada"], 200);
		}
		return Response::json(['message'=> "Tecnología en uso"], 404);
	}
}