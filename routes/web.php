<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
	return view('home');
});
Route::get('servicios' , function () {
	return view('services');
});	
Route::get('mantenimiento-web', function () {
	return view('pages.maintenance');
});	
Route::get('proyectos', [
	'uses' => 'ProjectController@getIndex' 
]);
Route::get('contacto', [
	'uses' => 'AppController@getContact'
]);
Route::get('jc-freelancer-malaga', function () {
	return view('pages.about');
});
Route::get('libros' , function () {
	return view('pages.books');
});
Route::get('cookies', function () {
	return view('pages.cookies');
});
Route::get('politica-privacidad', function () {
	return view('pages.privacy');
});

/* redirects */
Route::get('facebook', function () {
    return redirect('https://www.facebook.com/jc2net/');
});
Route::get('twitter', function () {
    return redirect('https://twitter.com/jc2net');
});
Route::get('youtube', function () {
    return redirect('https://www.youtube.com/channel/UC9wKRs6Mgf2wR2qfjYM0-uQ');
});

/* BLOG, front-end */
Route::get('arts', [
	'uses' => 'BlogController@getIndex',
	'as' => 'articulos'
]);

Route::get('arts/categoria/{category_name}', [
	'uses' => 'BlogController@getIndex',
	'as' => 'articulos.categorias'
]);

Route::get('/art/{post_slug}', [
	'uses' => 'BlogController@getSingle',
	'as' => 'articulo'
]);

/* Admin login */
Route::get('/admin/login', [
	'uses' => 'AdminController@getLogin',
	'as' => 'login' 
]);

Route::post('/admin/login', [
	'uses' => 'AdminController@postLogin',
	'as' => 'admin.login' 
]);

 /* admin area */
Route::group([
	'prefix' => '/admin',
	'middleware' => 'auth'
], function() {
	Route::get('/', [
		'uses' => 'AdminController@getIndex',
		'as' => 'admin'
	]);
	
	Route::get('/logout', [
		'uses' => 'AdminController@getLogout',
		'as' => 'admin.logout'
	]);

	/* PROJECT routes */
	Route::get('/projects', [
		'uses' => 'ProjectController@getAdminIndex',
		'as' => 'admin.projects'
	]);
	
	Route::get('/projects/add', [
		'uses' => 'ProjectController@getAddProject',
		'as' => 'admin.projects.add'
	]);
	
	Route::post('/project/add', [
		'uses' => 'ProjectController@postAddProject',
		'as' => 'admin.project.add'
	]);
	
	Route::get('/project/{project_id}/update', [
		'uses' => 'ProjectController@getUpdateProject',
		'as' => 'admin.projects.update'
	]);	
		
	Route::post('/project/update', [
		'uses' => 'ProjectController@postUpdateProject',
		'as' => 'admin.project.update'
	]);
	
	Route::get('/project/{project_slug}', [
		'uses' => 'ProjectController@getSingleAdmin',
		'as' => 'admin.project'
	]);
	
	Route::get('/project/{project_id}/delete', [
		'uses' => 'ProjectController@getDeleteProject',
		'as' => 'admin.project.delete'
	]);
	
	/* PROJECT routes, skills */
    Route::get('/projects/skills', [
		'uses' => 'SkillController@getIndex',
		'as' => 'admin.projects.skills'
	]);
	
	Route::post('/projects/skills',[
		'uses' => 'SkillController@postAddSkill',
		'as' => 'admin.skill.post'
	]);
	
	Route::post('/projects/skill/update', [
		'uses' => 'SkillController@postUpdateSkill',
		'as' => 'admin.skill.update'
	]);
	
	Route::get('/projects/skill/{skill_id}/delete', [
		'uses' => 'SkillController@getDeleteSkill',
		'as' => 'admin.skill.delete'
	]);
   
	/* PROJECT routes, images */
	Route::get('/project/{project_id}/media', [
		'uses' => 'MediaController@getIndex',
		'as' => 'admin.project.media.add'
	]);
	
	Route::post('/project/media', [
		'uses' => 'MediaController@postProjectMedia',
		'as' => 'admin.project.media'
	]);
	
	Route::post('/media', [
		'uses' => 'MediaController@postIndex',
		'as' => 'admin.media'
	]);
	Route::get('/media/{image_id}/delete', [
		'uses' => 'MediaController@getDelete',
		'as' => 'admin.media.delete'
	]);

    /* BLOG routes */
    Route::get('/posts', [
		'uses' => 'BlogController@getAdminIndex',
		'as' => 'admin.posts'
	]);
	
	Route::get('/posts/{post_slug}/{is_admin}', [
		'uses' => 'BlogController@getSingle',
		'as' => 'admin.post'
	]);	

	Route::get('/posts/add', [
		'uses' => 'BlogController@getAddPost',
		'as' => 'admin.posts.add'
	]);	
	Route::post('/post/add', [
		'uses' => 'BlogController@postAddPost',
		'as' => 'admin.post.add'
	]);
	
	Route::get('/post/{post_id}/update', [
		'uses' => 'BlogController@getUpdatePost',
		'as' => 'admin.posts.update'
	]);	
	Route::post('/post/update', [
		'uses' => 'BlogController@postUpdatePost',
		'as' => 'admin.post.update'
	]);
	
	Route::get('/post/{post_id}/delete', [
		'uses' => 'BlogController@getDeletePost',
		'as' => 'admin.post.delete'
	]);	
	
	/* BLOG categories */
	Route::get('/categories', [
		'uses' => 'CategoryController@getIndex',
		'as' => 'admin.categories'
	]);
	
	Route::post('/categories',[
		'uses' => 'CategoryController@postAddCategory',
		'as' => 'admin.category.post'
	]);
	
	Route::post('/category/update', [
		'uses' => 'CategoryController@postUpdateCategory',
		'as' => 'admin.category.update'
	]);
	
	Route::get('/categories/{category_id}/delete', [
		'uses' => 'CategoryController@getDeleteCategory',
		'as' => 'admin.category.delete'
	]);
});

/* multilanguage */
Route::group(['prefix' => '{lang?}'], function () {
	 
	Route::get('/', function() {
		return view('home');		
	})->name('home');

	Route::post('/home', [
		'uses' => 'AppController@postHome'
	]);

	/* services */
	Route::get('{servicios}' , function () {
		return view('services');
	})->name('servicios')->where('servicios', '(servicios|services)');
	
	Route::get('{maintenance}', function () {
		return view('pages.maintenance');
	})->name('maintenance')->where('maintenance', '(mantenimiento-web|web-maintenance)');	

	/* projects */
	Route::get('{proyectos}', [
		'uses' => 'ProjectController@getIndex',
		'as' => 'proyectos'
	])->where('proyectos', '(proyectos|projects)');

	Route::get('{proyectos}/skill/{skill_name}', [
		'uses' => 'ProjectController@getIndex',
		'as' => 'proyectos.skills'
	])->where('proyectos', '(proyectos|projects)');

	Route::get('{proyecto}/{project_slug}', [
		'uses' => 'ProjectController@getSingle',
		'as' => 'proyecto'
	])->where('proyecto', '(proyecto|project)');

	/* other pages */
	Route::get('{contacto}', [
		'uses' => 'AppController@getContact'
	])->name('contacto')
	  ->where('contacto', '(contacto|contact)');

	Route::post('/contactform', [
		'uses' => 'AppController@postContact'
	]);

	Route::get('/jc-freelancer-malaga', function () {
		return view('pages.about');
	})->name('about');	
	
	Route::get('{libros}' , function () {
		return view('pages.books');
	})->name('books')->where('libros', '(libros|books)');

	Route::get('/cookies', function () {
		return view('pages.cookies');
	})->name('cookies');

	Route::get('/politica-privacidad', function () {
		return view('pages.privacy');
	})->name('privacy');
	
	Route::get('changeLocale/{locale}', function ($locale) {	
        return redirect()->back()->with('locale', $locale);
    });	
	
	/* background */
	Route::group(['prefix' => 'training'], function () {
		
		Route::get('/java', function () {
			return view('pages.java');
		})->name('java');
		
		Route::get('/java-enterprise/{file}', [
			'uses' => 'AppController@getDownloadPDF',
			'as' => 'j2ee.titulo'
		]);
		Route::get('/java-enterprise-temario/{file}', [
			'uses' => 'AppController@getDownloadPDF',
			'as' => 'j2ee.temario'
		]);
		Route::get('/java-universidad-apuntes/{file}', [
			'uses' => 'AppController@getDownloadZIP',
			'as' => 'java.apuntes'
		]);
		Route::get('/java-universidad-examen/{file}', [
			'uses' => 'AppController@getDownloadPDF',
			'as' => 'java.examen.pdf'
		]);
	});
 });
 
