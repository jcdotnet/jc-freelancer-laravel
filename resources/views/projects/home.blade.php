@extends ('layouts.default')

@section('title')
	<title> @lang("Proyectos | Jose Carlos Román Rubio")</title>
@endsection

@section('content')

<section id="breadscrumb">
	<div class="container">    
        <div class="row breadscrumb-container">
            <div>
                <ul class="breadcrumb">
                    <li><a href=" {{ route('home') }}"> @lang('Inicio') </a></li>
					@if (!empty(Request::segment(2))) {{-- hemos filtrado por tecnologías --}}
						<li><a href=" {{ route('projects') }}"> @lang('Proyectos') </a></li>
						<li class="active"> {{ Request::segment(3) }} </li>
					@else
						<li class="active"> @lang('Proyectos') </li>
					@endif
				</ul>
            </div>
            <div class="row-header">
                <h3> @lang('Proyectos') </h3>
            </div>
        </div>
    </div>
</section>

<section id="proyectos">  
	<div class="container">
        <div class="row row-content">
			@foreach ($projects as $p)
            <div class="col-md-6 col-lg-4">
				<div class="col-md-12 item-box">
					
					<div class="item-box-header">					
						<h3 class="center"> {{ $p->nombre }} </h3>
						<h4 class="center subtitle">  {{ date('m/Y', strtotime($p->start)) }} - {{ $p->end ? date('m/Y', strtotime($p->end)) : __('actualidad') }}</h4>
					</div>
					
					<div class="item-box-content">
						<p> {!! $p->descripcion !!}  </p>
						<div class="skills">
							<ul class="list-inline">
								@foreach ($p->skills as $skill)								
									<li><a href="{{ route('projects.skills', ['skill_name' => $skill->name]) }}" class="label label-lg label-default" style="color:#fff"> {{ $skill->name }} </a></li>
								@endforeach
							</ul>
						</div>
						<div class="item-box-bottom center">
							<a href="{{ route('project', ['project_slug' => $p->slug])}}" class="btn-jc btn-theme"> @lang('Ver proyecto')</a>  
						</div>
				
					</div>

				</div>
           </div>
			@endforeach
        </div>
		@if ($projects->lastPage() > 1)
		<div class="row row-content">
			<nav aria-label="...">
				<ul class="pager">
					@if ($projects->currentPage() !==1)
						<li class="previous"><a href="{{$projects->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> @lang("Anteriores")</a></li>
					@endif
					@if ($projects->currentPage() !== $projects->lastPage())
						<li class="next"><a href="{{$projects->nextPageUrl()}}">@lang("Siguientes") <span aria-hidden="true">&rarr;</span></a></li>
					@endif
				</ul>
			</nav>
		</div>
        @endif
    </div>
</section>

@endsection