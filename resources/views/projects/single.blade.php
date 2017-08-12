@extends ('layouts.default')
@section('title')
	<title> {{$project->nombre }} | Jose Carlos Román Rubio</title>
@endsection
@section('content')

<section id="breadscrumb">
	<div class="container">    
        <div class="row breadscrumb-container">
            <div>
                <ul class="breadcrumb">
                    <li><a href=" {{ route('home') }}"> @lang('Inicio') </a></li>
					
					<li><a href=" {{ route('projects') }}"> @lang('Proyectos') </a></li>
					<li class="active"> {{ $project->name }} </li>
				</ul>
            </div>
        </div>
    </div>
</section>

<div class="container project">	
	<div class="center">
	<h1 class="project-title">
		{{$project->name}} 
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
		<p class="project-description"> {!!$project->description!!}</p>
		@if ($project->url)
			<p class="center"><strong>URL: </strong> <a href=" {{$project->url}}" target="_blank" alt="{{$project->name}}">{{$project->url}}</a></p>
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
		<a href="{{ route('projects') }}" class="btn-jc btn-theme"> Volver </a>
	</div>
</div>

@endsection