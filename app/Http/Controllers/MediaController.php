<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;
use App\Project;

class MediaController extends Controller
{
	public function getIndex($project_id) {
				
		$project=Project::find($project_id);
		if(!$project)
		{
			return redirect()->route('admin')->with(['fail' => 'Proyecto no encontrado']);
		}		
		$images = Image::orderBy('created_at', 'desc')->paginate(12);

		$project_images = $project->images->all();
		$project_images_ids = array();
		
		$i = 0;
		foreach($project_images as $project_image)
		{
			$project_images_ids[$i] = $project_image->id;
			$i++;
		}						
		return view('admin.projects.media', ['project' => $project, 'images' => $images, 'project_images' => $project_images, 'project_images_ids' => $project_images_ids]);
	}
			
	public function postIndex(Request $request) {
		$this->validate($request, [
			'descripcion' => 'required|max:40',
			'path' => 'required|unique:images|image|max:300'
		]);
		$imagen = new Image();
		$imagen->path = urlencode($request->file('path')->getClientOriginalName());
		$imagen->description = $request->descripcion; 
		
		if ($imagen->save())
		{
			$request->file('path')->storeAs('public/images', $imagen->path);
			return redirect()->back()->with(["success" => "Imagen añadida"]);
		}
		return redirect()->back();		 
	}
	
	public function getDelete($image_id)
	{
		$image =Image::find($image_id);

		if ($image->delete()) {
			Storage::delete('public/images/'.$image->path);
			return redirect()->back()->with(["success" => "Imagen eliminada"]);
		}		
		return redirect()->back()->with(['fail' => "Error al eliminar la imagen"]);
	}	
	
	public function postProjectMedia(Request $request) {
	    $project = Project::find($request['project_id']);
		$project->images()->detach();
		if (strlen($request['project_images']) > 0)
		{
			$images_ids = explode (',', $request['project_images']);
			foreach ($images_ids as $image_id)
			{
				$project->images()->attach($image_id);
			}
		}			 		 
		return redirect()-> route('admin')->with(['success' => 'Proyecto actualizado']);
	}
		
}