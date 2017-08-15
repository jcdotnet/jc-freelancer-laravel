<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div id="top-bar-container" class="container-fluid">
			<div id="top-bar" class="collapse navbar-collapse">

				<div class="row">
					<span id="top-bar-name"><i class="fa fa-id-card-o" aria-hidden="true"></i> Jose Carlos Román Rubio </span>                            
					<span id="top-bar-email"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@josecarlosroman.com </span>

					<div class="pull-right">
						<a class="language" data-locale="en" type="button" class="btn btn-xs btn-flag"><img src="{{ asset("images/en_UK.png") }}" width="25"> </a>
						<a class="language" data-locale="es" type="button" class="btn btn-xs btn-flag"><img  src="{{ asset("images/es_ES.png") }}" width="25"></a> 
					</div>    
				</div>     
				
			</div>
		</div>

		<div id="navbar-container" class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<div id="navbar-hamburger">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<div id="navbar-close" class="hidden">
						<span class="glyphicon glyphicon-remove"></span>
					</div>
				</button>
				<div id="flags" class="pull-right">
					<a class="language" data-locale="en">EN</a>
					<a class="language" data-locale="es">ES</a>
				</div>              
				<a href="{{route('home')}}" class="navbar-brand" ><img src=" {{ asset("images/jc_letters.png") }}"></a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="{{ Request::is('/') ? 'dropdown active' : 'dropdown' }}"><a href="{{ route('home') }}"> @lang("Inicio") </a></li>
					<li class="dropdown {{Request::is('servicios*') ? 'active':''}}">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> @lang("Servicios")</a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('services') }}"> @lang("Todos mis servicios")</a></li> 
							<li><a href="http://josecarlosroman.com/wordpress" target="_blank">WordPress</a></li>
						</ul>
					</li>
					<li class="{{Request::is('proyecto*') ? 'active':''}}"><a href="{{ route('projects') }}"> @lang('Proyectos') </a></li> 
					<li class="{{Request::is('about*') ? 'active':''}}"><a href="{{ route('about') }}"> @lang('Sobre mí') </a></li> 
					<li class="{{Request::is('contacto') ? 'active':''}}"><a href="{{ route('contact') }}"> @lang('Contacto')</a></li>                    
				</ul>
			</div>
		</div>
	</nav> 
</header>

<div id="main">
