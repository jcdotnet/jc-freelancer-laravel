@extends('layouts.admin');

@section('content')
<section>
	<div class="container">		
		@include('includes/info-alert')
		
		<div class="row"> 
			<div class="card-deck col-12">
				<div class="card">	
					<div class="card-body">
						<h3 class="card-title text-center">Últimos proyectos</h3>
						<ul class="list-group list-group-flush">
							@if (count($projects) == 0)
								<li class="list-group-item"> No hay proyectos </li>
							@else
								@foreach ($projects as $project)
								<li class="list-group-item">
									<div>										
										<h5> {{ $project->nombre }}</h5>
										<h5 class="subtitle"> {{ date('m/Y', strtotime($project->start)) }} - {{ $project->end ? date('m/Y', strtotime($project->end)) : __('actualidad') }} </h5>						
										<div class="text-center">
											<nav class="list-inline">
												<a class="list-inline-item" href="{{ route('admin.project', ['project_slug' => $project->slug]) }}">Ver</a>
												<a class="list-inline-item" href="{{ route('admin.projects.update', ['project_id' => $project->id]) }}">Editar</a>
												<a class="list-inline-item" href="{{ route('admin.project.media.add', ['project_id' => $project->id]) }}">Imágenes</a>
												<a class="list-inline-item" href="{{ route('admin.project.delete', ['project_id' => $project->id]) }}" onclick="return confirm('¿Seguro?')"><span class="text-danger">Eliminar</span></a>
											</nav>
										</div>
									</div>	
								</li>
								@endforeach
							@endif
						</ul>
						<div class="text-center mt-3">
							<p><a href="{{ route('admin.projects.add') }}" class='btn-jc btn-theme'> Nuevo proyecto</a></p>			
							<p><a href="{{ route('admin.projects') }}" class='btn-jc btn-theme'> Ver todos </a></p>
							<p><a href="{{ route('admin.projects.skills') }}" class='btn-jc btn-theme-inverse'> Tecnologías</a></p>
						</div>						
					</div>
				</div>
							

				<div class="card">	
					<div class="card-body">
						<h3 class="card-title text-center"> Últimos artículos</h3>				

						<ul class="list-group list-group-flush">
							@if (count($posts) == 0) 
								<li class="list-group-item"> No hay artículos </li>
							@else
								@foreach ($posts as $post)
								<li class="list-group-item">
									<div>										
										<h5> {{ $post->title }} | por {{ $post->author }}</h5>
										<p class="card-text"> {{ $post->getContentExcerpt(20) }}</p>											
										<div class="text-center">
											<nav class="list-inline">
												<a class="list-inline-item" href="{{ route('admin.post', ['post_slug' => $post->slug, 'is_admin' => '1']) }}">Ver</a>
												<a class="list-inline-item" href="{{ route('admin.posts.update', ['post_id' => $post->id]) }}">Editar</a>
												<a class="list-inline-item" href="{{ route('admin.post.delete', ['post_id' => $post->id]) }}" onclick="return confirm('¿Seguro?')"><span class="text-danger">Eliminar</span></a>
											</nav>
										</div>
									</div>	
								</li>
								@endforeach
							@endif
						</ul>

						<div class="text-center mt-3">
							<p><a href="{{ route('admin.posts.add') }}" class='btn-jc btn-theme'> Nuevo artículo</a></p>			
							<p><a href="{{ route('admin.posts') }}" class='btn-jc btn-theme'> Ver todos </a></p>
							<p><a href="{{ route('admin.categories') }}" class='btn-jc btn-theme-inverse'> Categorías</a></p>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
@endsection