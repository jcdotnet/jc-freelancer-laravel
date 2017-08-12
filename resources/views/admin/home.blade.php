@extends('layouts.admin');

@section('content')

@include('includes/info-alert')

<section>
	<div class="container">
		<div class="row">           
			<div class='col-sm-6'>
				<div class="col-sm-12 item-box">				
				<h2 class="center"> Últimos Proyectos </h2>

				<div class='item-box-content'>				
					<ul class="list-group">
						@if (count($projects) == 0)
							<li class="list-group-item center"> No hay proyectos </li>
						@else
							@foreach ($projects as $project)
							<li class="list-group-item">
								<div>
									<h3> {{ $project->nombre }}</h3>
									<h4 class="subtitle"> {{ date('m/Y', strtotime($project->start)) }} - {{ $project->end ? date('m/Y', strtotime($project->end)) : __('actualidad') }} </h4>						
									<div>
										<ul class="list-inline">
											<li><a href="{{ route('admin.project', ['project_slug' => $project->slug]) }}">Ver</a></li>
											<li><a href="{{ route('admin.project.update', ['project_id' => $project->id]) }}">Editar</a></li>
											<li><a href="{{ route('admin.project.media.add', ['project_id' => $project->id]) }}">Imágenes</a></li>
											<li><a href="{{ route('admin.project.delete', ['project_id' => $project->id]) }}" onclick="return confirm('Are you sure?')"><span class="text-danger">Eliminar</span></a></li>
										</ul>
									</div>
								</div>
							</li>
							@endforeach
							@endif
					</ul>
				</div>
				<div class="center">
					<p><a href="{{ route('admin.projects.add') }}" class='btn-jc btn-theme'> Nuevo proyecto</a></p>			
					<p><a href="{{ route('admin.projects') }}" class='btn-jc btn-theme'> Ver todos </a></p>
					<p><a href="{{ route('admin.projects.skills') }}" class='btn-jc btn-theme-inverse'> Tecnologías</a></p>
				</div>
				</div>

			</div>


			<div class='col-sm-6'>
				<div class="col-sm-12 item-box">				
					<h2 class="center"> Últimas entradas </h2>				
					<div class='item-box-content'>				
						<ul class="list-group">
							{{-- @if (count($posts) == 0) --}}
							<li class="list-group-item center"> No hay entradas </li>
							{{--@else--}}

							{{--@endif--}}
						</ul>
					</div>
					<div class="center">
						<p><a href="#" class='btn-jc btn-theme'> Nueva entrada</a></p>			
						<p><a href="#" class='btn-jc btn-theme'> Ver todas </a></p>
						<p><a href="#" class='btn-jc btn-theme-inverse'> Categorías</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
@endsection