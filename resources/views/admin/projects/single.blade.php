@extends('layouts.admin')

@section('content')

<div class="container project">
	<div class="center">
	<h1 class="project-title">
		{{$project->nombre}} 
		{{--
		@if($project->start > (new \Carbon\Carbon())->subDays(30))
			<span class="label label-success">@lang('Nuevo')</span>
		@endif
		--}}
	</h1>
	</div>
	<div class="skills center">
		<ul class="list-inline">
			@foreach ($project->skills as $skill)								
			<li><span class="label label-lg label-default" style="color:#fff"> {{ $skill->name }} </span></li>
			@endforeach
		</ul>
	</div>
	<div class="row row-content">
		<p class="project-description"> {!! $project->descripcion !!}</p>
		@if ($project->url)
			<p class="center"><strong>URL: </strong> {{$project->url}}</p>
		@endif
	</div>
	<div class="row row-content">
		<ul class="list-inline center">
			@if ($project->client) 
				<li>@lang("Cliente"): <strong> {{$project->client }} </strong></li>
			@endif
			<li>@lang("Fecha inicio"): <strong> {{ date('m/Y', strtotime($project->start)) }}</strong></li>
			<li>@lang("Fecha fin"): <strong> {{ $project->end ? date('m/Y', strtotime($project->end)) : __('actualidad') }} </strong></li> 
			<li>@lang("Proyecto freelance"): <strong> <i class="{{$project->freelance ? 'fa fa-check': 'fa fa-times'}}" aria-hidden="true"></i> </strong></li>
		</ul>
	</div>
	<div class="row row-content">
        @foreach ($project->images as $image)
			<div class="col-md-3">
				<div class="thumbnail image-thumbnail">
					<a href="{{asset('storage/'.$image->path)}}">
						<img src="{{asset('storage/'.$image->path)}}" alt="{{$image->description}}" style="width:100%">
					</a>
					<div class="caption">
						<h3>{{$image->description}}</h3>					
					</div>
				</div>
			</div>					
        @endforeach
	</div>
	<div class="row row-content center">
		<a href="{{ route('admin.projects') }}" class="btn-jc btn-theme"> Volver </a>
	</div>
</div>
@endsection