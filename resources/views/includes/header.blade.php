<header>

    <div id="top-bar-container" class="container-fluid hidden-sm-down">
		<div class="row" id="top-bar">	
			<div class="col">
				<span id="top-bar-email"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@josecarlosroman.com">info@josecarlosroman.com </a></span>
			
				<div class="pull-right">
					<a href="{{url('en/changeLocale/en')}}" class="language" data-locale="en" class="flag"><img src="{{ asset("images/en_UK.png") }}" width="25"> </a>
					<a class="language"  href="{{url('es/changeLocale/es')}}" data-locale="es" class="flag"><img  src="{{ asset("images/es_ES.png") }}" width="25"></a> 
				</div> 
			</div>
		</div>
	</div>

	<nav class="navbar navbar-toggleable-sm fixed-top">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-items" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbar-flags" class="pull-right">
					<a href="{{url('en/changeLocale/en')}}" class="language" data-locale="en">EN</a>
					<a href="{{url('es/changeLocale/es')}}" class="language" data-locale="es">ES</a>
			</div>
			
			<a href="{{ route('home', Config::get('app.locale') == 'es' ? '': Config::get('app.locale')) }}" class="navbar-brand" ><img src=" {{ asset("images/jc_letters.png") }}"></a>
			<div class="collapse navbar-collapse" id="navbar-items">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{Request::is('/') || Request::is('*en') ? 'active':''}}">
						<a class="nav-link" href="{{ route('home', Config::get('app.locale') == 'es' ? '': Config::get('app.locale')) }}"> @lang("Inicio") </a></li>
					<li class="nav-item dropdown {{Request::is('*'.__('routes.servicios').'*') ? 'active':''}}">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> @lang("Servicios")</a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('servicios', [Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'), __("servicios")] ) }}"> @lang("Todos mis servicios")</a></li> 
							<li><a href="http://josecarlosroman.com/wordpress/" target="_blank">WordPress</a></li>
						</ul>
					</li>
					<li class="nav-item {{Request::is('*'.__('routes.proyecto').'*') ? 'active':''}}"><a class="nav-link" href="{{ route('proyectos', [Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'), __("routes.proyectos")]) }}"> @lang('Proyectos') </a></li> 
					<li class="nav-item {{Request::is('*jc-freelancer*') ? 'active':''}}"><a class="nav-link" href="{{ route('about', Config::get('app.locale') == 'es' ? '': Config::get('app.locale')) }}"> @lang('Sobre mí') </a></li> 
					<li class="nav-item {{Request::is('*'.__('routes.contacto').'*') ? 'active':''}}"><a class="nav-link" href="{{ route('contacto', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.contacto")]) }}"> @lang('Contacto')</a></li>                    
				</ul>
			</div>
		</div>
	</nav>
	
</header>

<div id="main">
