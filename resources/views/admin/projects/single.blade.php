@extends('layouts.admin')

@section('content')

<div class="container project">
	<div class="row row-content">
		<div class="col text-center">
			<h1 class="project-title">
				{{$project->nombre}} 
				{{--
				@if($project->start > (new \Carbon\Carbon())->subDays(30))
					<span class="badge badge-success">@lang('Nuevo')</span>
				@endif
				--}}
			</h1>
			<div class="skills center">
				<ul class="list-unstyled">
					@foreach ($project->skills as $skill)								
					<li><span class="badge badge-lg badge-dark" style="color:#fff"> {{ $skill->name }} </span></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	
	<div class="row row-content">
		<div class="col">
			<p class="project-description"> {!! $project->descripcion !!}</p>
			@if ($project->url)
				<p class="text-center"><strong>URL: </strong>  <a href=" {{$project->url}}" target="_blank" alt="{{$project->name}}">{{$project->url}}</a></p>
			@endif
		</div>
	</div>
	
	<div class="row row-content">
		<div class="col text-center">
			<ul class="list-inline">
				@if ($project->client) 
					<li class="list-inline-item">@lang("Cliente"): <strong> {{$project->client }} </strong></li>
				@endif
				<li class="list-inline-item"> @lang("Fecha inicio"): <strong> {{ date('m/Y', strtotime($project->start)) }}</strong></li>
				<li class="list-inline-item"> @lang("Fecha fin"): <strong> {{ $project->end ? date('m/Y', strtotime($project->end)) : __('actualidad') }} </strong></li> 
				<li class="list-inline-item">@lang("Proyecto freelance"): <strong> <i class="{{$project->freelance ? 'fa fa-check': 'fa fa-times'}}" aria-hidden="true"></i> </strong></li>
			</ul>
		</div>
	</div>

	<div class="row row-content justify-content-center" id="project-images">
        @foreach ($project->images as $image)
			<div class="col-md-3">
				<figure class="figure">
					<a href="{{asset('storage/'.$image->path)}}">
						<img src="{{asset('storage/'.$image->path)}}" class="figure-img img-fluid img-thumbnail rounded" alt="{{$image->description}}"> <!-- style="width:100%" -->
					</a>
					<figcaption class="figure-caption text-center"><h4>{{$image->description}}</h4></figcaption>
				</figure>
			</div>					
        @endforeach
	</div>

	<div class="row row-content">
		<div class="col text-center">
			<a href="{{ route('admin.projects') }}" class="btn-jc btn-theme"> Volver </a>
		</div>
	</div>
</div>
@endsection