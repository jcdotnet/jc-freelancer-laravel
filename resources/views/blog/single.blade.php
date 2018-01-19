@extends ('layouts.default')

@section('head')
	<title> {{$post->title }} | Jose Carlos Román Rubio</title>
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')

<section id="breadscrumb" class="first-section">
   <div class="container">    
        <div class="row">
			<div class="col">
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">{{$post->title}}</span>
				</nav>
			</div>
		</div>
    </div>
</section>

<div class="container">
	
	<div class="row">
		<div class="col row-header">
			<h1> {{$post->title}} </h1>
		</div>
	</div>
	
	<div class="row post-metadata">
		<div class="col post-metadata text-center">
			<ul class="list-inline">
				@foreach ($post->categories as $skill)								
					<li class="list-inline-item"><span class="badge badge-secondary"> {{ $skill->name }} </span></li>
				@endforeach
			</ul>					
		</div>
	</div>
	
	<div class="row row-content">
		<div class="col">
			{!! $post->content !!}
		</div>
	</div>

	<div class="row row-content">
		<div class="col text-center">
			<a href="{{ route('articulos') }}" class="btn-jc btn-theme"> Volver </a>
		</div>
	</div>
</div>
@endsection