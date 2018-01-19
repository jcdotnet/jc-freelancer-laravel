@extends ('layouts.default')

@section('head')
	<title> @lang("Artículos") @if (!empty(Request::segment(3))) @lang("sobre ") {{ Request::segment(4) }} @endif | Jose Carlos Román Rubio"</title>
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')

<section id="breadscrumb" class="first-section">
	<div class="container">    
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href=" {{ route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang('Inicio') </a>
					@if (!empty(Request::segment(3))) {{-- hemos filtrado por categorías --}}
						<a class="breadcrumb-item" href=" {{ route('articulos')}}"> @lang('Artículos') </a>
						<span class="breadcrumb-item active"> {{ Request::segment(3) }} </span>
					@else
						<a class="breadcrumb-item active"> @lang('Artículos') </a>
					@endif
				</nav>
            </div>
		</div>
		
		<div class="row">
			<div class="col row-header">
                <h3> @lang('Artículos') </h3>
            </div>
		</div>    
    </div>
</section>


<section id="posts">  
	<div class="container">
		@include('includes/info-alert')
        <div class="row row-content">
			<div class="card-deck">
				@foreach ($posts as $p)
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">{{ $p->title }} @if($p->created_at > (new \Carbon\Carbon())->subDays(30)) <span class="badge badge-success float-right">@lang('Nuevo')</span> @endif </h5>
						<p class="card-text">{{ $p->getContentExcerpt(20) }}</p>
						<p class="card-text">
							<small class="text-muted">
								Author: <strong>{{$p->author}}</strong>. Modificado: <strong>{{$p->updated_at}}</strong></small>
							</small>
							<br>
							<div class="list-inline">
							@foreach ($p->categories as $category)
								<a class="list-inline-item badge badge-lg badge-secondary" href="{{ route('articulos.categorias', [$category->name] ) }}" style="color:#fff"> 
									{{ $category->name }} 
								</a>									
							@endforeach
							</div>							
						</p>
						<div class="text-center list-inline">
							<a href="{{ route('articulo', ['post_slug' => $p->slug]) }}" class="btn-jc btn-theme"> @lang("Leer") </a>
						</div>
				  </div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
           
						
		
	@if ($posts->lastPage() > 1)
	<div class="row row-content justify-content-around">
		@if ($posts->currentPage() !==1)
			<div class="col col-sm-4 col-lg-2"><a href="{{$posts->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
		@endif
		@if ($posts->currentPage() !== $posts->lastPage())
			<div class="col col-sm-4 col-lg-2"><a href="{{$posts->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
		@endif
	</div>
	@endif
</section>

@endsection