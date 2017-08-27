@extends('layouts.admin');

@section('content')

@include('includes/info-alert')

<section>
	<div class="container">
		<div class="row">      
			
			<div class='col-sm-6'>
				<div class="row">
					<div class="col-12 card">	
						<div class="card-block">
							<h2 class="card-title text-center">Últimos proyectos</h2>
							<ul class="list-group list-group-flush">
								@if (count($projects) == 0)
									<li class="list-group-item"> No hay proyectos </li>
								@else
									@foreach ($projects as $project)
									<li class="list-group-item">
										<div>										
											<h4> {{ $project->nombre }}</h4>
											<h4 class="subtitle"> {{ date('m/Y', strtotime($project->start)) }} - {{ $project->end ? date('m/Y', strtotime($project->end)) : __('actualidad') }} </h4>						
											<div class="text-center">
												<nav class="list-inline">
													<a class="list-inline-item" href="{{ route('admin.project', ['project_slug' => $project->slug]) }}">Ver</a>
													<a class="list-inline-item" href="{{ route('admin.project.update', ['project_id' => $project->id]) }}">Editar</a>
													<a class="list-inline-item" href="{{ route('admin.project.media.add', ['project_id' => $project->id]) }}">Imágenes</a>
													<a class="list-inline-item" href="{{ route('admin.project.delete', ['project_id' => $project->id]) }}" onclick="return confirm('Are you sure?')"><span class="text-danger">Eliminar</span></a>
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
				</div>
			</div>

			<div class='col-sm-6'>
				<div class="row">
					<div class="col-12 card">	
						<div class="card-block">
							<h2 class="card-title text-center"> Últimas entradas </h2>				
											
							<ul class="list-group list-group-flush">
								{{-- @if (count($posts) == 0) --}}
									<li class="list-group-item"> No hay entradas </li>
								{{--@else--}}

								{{--@endif--}}
							</ul>
							
							<div class="text-center mt-3">
								<p><a href="#" class='btn-jc btn-theme'> Nueva entrada</a></p>			
								<p><a href="#" class='btn-jc btn-theme'> Ver todas </a></p>
								<p><a href="#" class='btn-jc btn-theme-inverse'> Categorías</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>
@endsection