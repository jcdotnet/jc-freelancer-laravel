@extends ('layouts.default')

@section('head')
	<title> @lang("Proyectos | José Carlos Román Rubio")</title>
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')

<section id="page-title" class="title-standard first-section">
   <div class="container">  
        <div class="row align-items-center text-center">
			<div class="col-12 title-content">
				<h1>@lang('Proyectos')</h1>				
				<nav class="breadcrumb">
                    <a class="breadcrumb-item" href=" {{ route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang('Inicio') </a>
					@if (!empty(Request::segment(3))) {{-- hemos filtrado por tecnologías --}}
						<a class="breadcrumb-item" href=" {{ route('proyectos', [Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'), __('routes.proyectos')])}}"> @lang('Proyectos') </a>
						<span class="breadcrumb-item active"> {{ Request::segment(4) }} </span>
					@else
						<a class="breadcrumb-item active"> @lang('Proyectos') </a>
					@endif
				</nav>
			</div>
		</div>
    </div>
</section>


<section id="proyectos">  
	<div class="container">
		
        <div class="row mt-4">
			@foreach ($projects as $p)	
			<div class="col-sm-6 col-lg-4 d-flex"> 
				<div class="card mb-3 pb-5">
					<div class="card-body">
						<h4 class="card-title">{{ $p->nombre }}</h4>
						<h6 class="card-subtitle mb-2 text-muted">{{ date('m/Y', strtotime($p->start)) }} - {{ $p->end ? date('m/Y', strtotime($p->end)) : __('actualidad') }}</h6>
						<p class="card-text">{!! $p->descripcion !!} </p>
						<div class="card-text text-center mb-2">
							<div class="list-inline">
								@foreach ($p->skills as $skill)						
									<a href="{{ route('proyectos.skills', [Config::get('app.locale') , __('routes.proyectos'), $skill->name] ) }}" class="badge badge-secondary" style="color:#fff"> {{ $skill->name }} </a>
								@endforeach
							</div>
						</div>
						<div class="project-item-bottom text-center">
							<a href="{{ route('proyecto', [Config::get('app.locale'), __('routes.proyecto'), $p->slug ])}}" class="card-link btn-jc btn-theme">@lang('Ver proyecto')</a>
						</div>
							
					</div>
				</div>
			</div>
		@endforeach
		</div>
		
		@if ($projects->lastPage() > 1)
		<div class="row row-content justify-content-around">
			@if ($projects->currentPage() !==1)
				<div class="col col-sm-4 col-lg-2"><a href="{{$projects->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
			@endif
			@if ($projects->currentPage() !== $projects->lastPage())
				<div class="col col-sm-4 col-lg-2"><a href="{{$projects->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
			@endif
		</div>
        @endif
		    
    </div>
	
</section>

@endsection