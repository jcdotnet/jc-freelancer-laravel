<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
	
	public function getIndex()
	{
		$projects = Project::orderBy('updated_at', 'desc')->take(3)->get();
		return view('admin.home', ['projects' => $projects]);
	}
	
	public function getLogin()
	{
		return view('admin.login');
	}
	
	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'password' => 'required'
		]);
		
		if (!Auth::attempt(['name'=>$request['name'], 'password'=>$request['password'] ]))
		{
			return redirect()->back()->with(['fail' => 'Inicio de sesión no válido']);
		}
		return redirect()->route('admin');
	}
	
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('home');
	}
}

