<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class BlogController extends Controller {
	
	public function getIndex($category_name = null) 
	{
		$posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->paginate(6);	
		
		if ($category_name != null) 
		{			
			$category = Category::where('name', $category_name)->first();
			if ($category)
			{
				$posts = $category->posts()->where('status', 'published')->orderBy('created_at', 'desc')->paginate(6);
				
				return view('blog.home', ['posts' => $posts]);
			} 			
		}
		return view('blog.home', ['posts' => $posts]);  
	}
	
	public function getAdminIndex() 
	{
		$posts= Post::orderBy('created_at', 'desc')->paginate(6);	
		
		return view('admin.blog.home', ['posts' => $posts]);  
	}
	
	public function getSingle($post_slug = null, $admin = false)
	{
		$post = Post::where('slug', $post_slug)->first();	
		if (!$post) {
			return redirect()->route($admin?'admin.posts':'articulos'); 
		}
		
		return view($admin?'admin.blog.single': 'blog.single' , ['post' => $post]);
	}
	
	public function getAddPost()
	{
		$categories=Category::all();
		return view('admin.blog.add', ['categories' => $categories]);
	}
	
	public function getUpdatePost($post_id)
	{	
		$post=Post::find($post_id);
		$categories=Category::all();
		$post_categories = $post->categories;
		$post_categories_ids = array();
		
		$i = 0;
		foreach($post_categories as $post_category)
		{
			$post_categories_ids[$i] = $post_category->id;
			$i++;
		}	
		if(!$post)
		{
			return redirect()->route('admin')->with(['error' => 'Artículo no encontrado']);
		}
		return view('admin.blog.update', ['post' => $post, 'categories' => $categories, 'post_categories' => $post_categories, 'post_categories_ids' => $post_categories_ids]);
	}	
	
	public function postAddPost(Request $request)
	{	
		$this->validate($request, [
			'title' => 'required|max:100|unique:posts',
			'content' => 'required',
			'status' => 'required'
		]);
		 
		$post = new Post();
		$post->title = $request['title'];
		$post->author = "JC"; // get username
		$post->slug = $post->getSlug();
		$post->status = $request['status'];
		$post->content = $request['content']; 
		$post->save();
		
		if (strlen($request['skills']) > 0) // using skills for both projects and posts
		{
			$categories_ids = explode (',', $request['skills']);
			foreach ($categories_ids as $category_id)
			{
				$post->categories()->attach($category_id);
			}
		}		 		 
		return redirect()-> route('admin')->with(['success' => 'Artículo creado']);
		
	}	
	
	public function postUpdatePost(Request $request)
	{  
		$this->validate($request, [
			'title' => 'required|max:100',
			'content' => 'required',
			'status' => 'required'
		]);
		 
		$post = Post::find($request['post_id']);
		$post->title = $request['title'];
		$post->slug = $post->getSlug();
		$post->status = $request['status'];
		$post->content = $request['content'];
		
		$post->update();
		
		$post->categories()->detach();
		if (strlen($request['skills']) > 0) // using skills for both projects and posts
		{
			$categories_ids = explode(',', $request['skills']);
			foreach ($categories_ids as $category_id)
			{
				$post->categories()->attach($category_id);
			}
		}			 		 
		return redirect()-> route('admin') ->with(['success' => 'Artículo actualizado']);		
	}	
    
	public function getDeletePost($post_id) {
		$post = Post::find($post_id);
		if (!$post) {
			return redirect()->route('admin')->with(['fail' => 'Artículo no encontrado']);
		}
		$post->categories()->detach();
		if ($post->delete())
		{
			return redirect()-> back() -> with(['success' => 'Artículo eliminado']);
		}
		return redirect()->back()->with(['fail' => 'No se ha podido eliminar el artículo']);
	}
}