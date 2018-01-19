<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Category;

class CategoryController extends Controller
{
    public function getIndex()
	{
		$categories = Category::orderBy('created_at', 'desc')->paginate(7);
		return view('admin.blog.categories', ['categories' => $categories]);
	}

	public function postAddCategory(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|unique:categories'
		]);
		$category = new Category();
		$category->name = $request['name'];
		
		if($category->save()){
			return Response::json(['message'=> "Categoría creada"], 200);
		}
		return Response::json(['message'=> "Error al crear la categoría"], 404);
	}
	
	public function postUpdateCategory(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|unique:categories'
		]);
		$category =Category::find($request['category_id']);
				
		if(!$category){
			return Response::json(['message'=> "Categoría no encontrada"], 404);
		}
		$category->name = $request['name'];
		$category->update();
		return Response::json(['message'=> "Categoría actualizada", 'new_name'=>$request["name"]], 200);
	}
	
	public function getDeleteCategory($category_id)
	{
		$category =Category::find($category_id);
		if ($category->delete()) {
			return Response::json(['message'=> "Categoría eliminada"], 200);
		}
		return Response::json(['message'=> "Categoría en uso"], 404);
	}
}
