@extends('layouts.default')

@section('head')
	<title> @lang("Programador freelance en Málaga | José Carlos Román Rubio") </title>
	<meta name="description" content=" {{ __("Me llamo José Carlos Román Rubio, soy Ingeniero Informático y trabajo como programador y desarrollador freelance ayudando a particulares y empresas.") }}">
	<link rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
	
@endsection

@section('content')

<section id="page-title" class="title-standard first-section">
   <div class="container">  
        <div class="row align-items-center text-center">
			<div class="col-12 title-content">
				<h1>Jose Carlos Román</h1>				
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">@lang("Sobre mí")</span>
				</nav>
			</div>
		</div>
    </div>
</section>

<section id="basics" class="background">
	<div class="container">
		<div class="row">
			<div class="col section-title">
				<h2>{!! __("Sobre mí, <span>conoce al freelance</span>") !!}</h2>	
				<p> 		
					{!! __("Mi nombre es <strong>José Carlos Román Rubio</strong> y trabajo como programador freelance ayudando a particulares y a empresas a realizar sus proyectos. También colaboro con empresas y con otros profesionales con el objetivo de ofrecer mejores servicios.") !!} 
				<p>
			</div>
		</div>

		<div class="row">
			<div class="col section-subtitle">
				<h2>@lang("Qué hago")</h2>	
			</div>
		</div>

		<div class="row row-content">
			<div class="col d-none d-md-block">
				<img src="{{ asset('storage/images/programming.png') }}" class="img-fluid" alt="José Carlos Román, programador freelance">
			</div>

			<div class="col">		
				<dl class="row">
					<dt class="col-3">@lang('Trabajo')</dt>
					<dd class="col-9">Software developer</dd>
					<dt class="col-3">@lang('Tipo')</dt>
					<dd class="col-9">Freelance</dd>
					<dt class="col-3">@lang('Comienzo')</dt>
					<dd class="col-9">2016</dd>
					<dt class="col-3">@lang("Áreas de trabajo")</dt>
					<dd class="col-9">@lang('Desarrollo Web, móvil y escritorio. Programación.') </dd>
					<dt class="col-3">@lang('Números')</dt>
					<dd class="col-9">@lang('Más de 20 clientes y más de 100 proyectos')</dd>
					<dt class="col-3">@lang('CV')</dt>
					<dd class="col-9">
						<a href="{{ Config::get('app.locale') === 'es' ? 'https://github.com/jcdotnet/curriculum/blob/master/docs/CV%20Jose%20Carlos%20Roman%20Rubio%20ES%20-%20public.pdf' 
								: 'https://github.com/jcdotnet/curriculum/blob/master/docs/CV%20Jose%20Carlos%20Roman%20Rubio%20EN%20-%20public.pdf' }}" target="_blank">
							@lang('Descargar')
						</a>									 
					</dd>	
				</dl>			
			</div>		
		</div>
	</div>

	<div class="container">
		<div class="row section-subtitle">
			<div class="col-12">
				<h2>@lang("Tecnologías")</h2>
			</div>
		</div>
		<div class="row row-content">
			<ul id="skills-carousel">
				<li class="text-center">
					<img src="{{ asset('storage/images/logo0.png') }}" height="50px" alt="Desarollo Java">	
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo1.png') }}" height="50px" alt="Desarrollo Android">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo2.png') }}" height="50px" alt="Desarrollo Angular">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo3.png') }}" height="50px" alt="Servidor Apache HTTP Server">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo4.png') }}" height="50px" alt="HTML">			  
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo5.png') }}" height="50px" alt="Ionic framework">	  
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo6.png') }}" height="50px" alt="Desarrolo JavaScript">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo7.png') }}" height="50px" alt="MySQL">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo8.png') }}" height="50px" alt="nodeJS">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo9.png') }}" height="50px" alt="PHP">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo10.png') }}" height="50px" alt="Visual Studio, dot NET">
				</li>
				<li class="text-center">
					<img src="{{ asset('storage/images/logo11.png') }}" height="50px" alt="Desarrollo WordPress">
				</li>
			</ul>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col section-subtitle">
				<h2>@lang('Educación')</h2>
			</div>
		</div>
		<div class="row row-content">
			<div class="col-lg-4">
				<div class="card mb-3">
					<img class="card-img-top img-fluid" src="{{ asset('storage/images/facultad.jpg') }}" alt="UMA. Universidad de Málaga">
					<div class="card-body">
						<h4 class="card-title">Universidad de Málaga</h4>
						<p class="card-text">ETS Ingeniería Informática.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<dl class="row">
					<dt class="col-12"> 2014 </dt>
					<dd class="col-12">
						<p>@lang('Ingeniería técnica en Informática de Sistemas.')</p>
						<p>@lang('Calificación total: NOTABLE. Calificación proyecto fin de carrera: SOBRESALIENTE.')</p>
					</dd>
					<dt class="col-12"> @lang("Cursos") </dt>
					<dd class="col-12">					
						<p>@lang('2006. Desarrollo de aplicaciones J2EE con prácticas en Novasoft. FORMAN. Duración: 360 horas')</p>
						<p>@lang('2007. Microsoft Certified Technology Specialist (.NET Framework 2.0). FORMAN. Duración: 670 horas.')</p>
					</dd>
					<dt class="col-12">@lang('Libros')</dt>				
					<dd class="col-12">
						@lang("Combinados con la documentación oficial es la mejor forma de aprender nuevas tecnologías. ")
						<a href="{{ route('books', [Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'), __('routes.books')])}}"> @lang("Éstos son los que tengo en mi estantería.")</a>
					</dd>			
				</dl>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">	
		<div class="col section-title">
			<h2><span>@lang("Dónde estoy")<span></h2>
			<p> 
				@lang("Puedes encontrarme en redes sociales, portales freelance, plataformas de aprendizaje, comunidades de desarrolladores, etc."); 
			<p>
		</div>
	</div>
	<div class="row-content">
		<div class="col-12 section-subtitle">
			<h2>Freelancer.com</h2>
		</div>
		<div>
			<p class="size-l">@lang("Freelancer.com es una plataforma donde las empresas pueden encontrar profesionales. Para garantizar la seguridad Freelancer.com trabaja con un sistema de escrow, mediante el cual la empresa deposita el dinero en Freelancer.com cuando selecciona al freelancer. Una vez finalizado el proyecto, Freelancer.com libera el dinero al freelancer.")</p>
		</div>
	</div>
	<div class="row justify-content-center">	
		<a href="https://www.freelancer.es/hireme/jcdotnet" target="_blank" class="btn-jc btn-theme">@lang("Contrátame en Freelancer.com")</a>
	</div>
	
	<div class="row row-content">
		<div class="col-12 section-subtitle">
			<h2>@lang("Otros")</h2>
		</div>
		<div class="col-12">
			<dl class="row">
				<dt class="col-sm-3">GitHub</dt>
				<dd class="col-sm-9"><a href="https://github.com/jcdotnet" target="_blank">@lang("Ver perfil")</a></dd>
				<dt class="col-sm-3">Stack Overflow</dt>
				<dd class="col-sm-9">@lang("La mayor comunidad online para programadores. ")<a href="https://stackoverflow.com/users/6463338/jcdotnet" target="_blank">@lang("Ver perfil")</a></dd>
				<dt class="col-sm-3">Udemy</dt>
				<dd class="col-sm-9">@lang("Plataforma para aprender y enseñar online. ")<a href="https://www.udemy.com/user/josecarlosromanrubio/" target="_blank">@lang("Ver perfil")</a></dd>
				<dt class="col-sm-3">Upwork</dt>
				<dd class="col-sm-9">@lang("Otra plataforma freelance. ")<a href="https://www.upwork.com/freelancers/~016889fa32b17df7fe" target="_blank">@lang("Ver perfil")</a></dd>
				<dt class="col-sm-3">WordPress</dt>
				<dd class="col-sm-9"><a href="https://profiles.wordpress.org/jcrr" target="_blank">@lang("Ver perfil")</a></dd>
				<dt class="col-sm-3">YouTube</dt>
				<dd class="col-sm-9"><a href="https://www.youtube.com/channel/UC9wKRs6Mgf2wR2qfjYM0-uQ" target="_blank">@lang("Ver perfil")</a></dd>
		   </dl>
		</div>
	</div>
</div>

@endsection

@section('scripts-after')
	<script src="{{ asset('js/lightslider.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			/* custom multi slide Bootstrap carousel by JC, JavaScript OK, CSS transitions not working as desired */
			/*
			$('#skills-carousel.carousel .carousel-item').each(function(){
				// console.log($("#skills-carousel.carousel .carousel-inner").children().length); // skills
				var slides = 4; // get slides number according to the screen width
				var i = 0;
				var slide = $(this);
				while (slide.length > 0 && i < slides) {
					if (slide.next().length > 0) 
						slide.next().children(':first-child').clone().appendTo($(this));		
					slide = slide.next();
					i++;
				}
				if (i < slides)
				{
				    slide = $(this).siblings(':first');
				    slide.children(':first-child').clone().appendTo($(this));
					while (i < slides) {
					   console.log(i);//.siblings(':first'); //.children(':first-child').clone().appendTo($(this));    
					   slide.next().children(':first-child').clone().appendTo($(this));
					   slide = slide.next();
					   i++;
				   }	
				}
			*/
			/* JQuery lightSlider, works great, using this library for now  */
			$('#skills-carousel').lightSlider({
				item:8,
				loop:false,
				slideMove:2,
				easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
				speed:600,
				responsive : [
					{
						breakpoint:992,
						settings: {
							item:6,
							slideMove:1,
							slideMargin:6,
						  }
					},
					{
						breakpoint:768,
						settings: {
							item:4,
							slideMove:1
						  }
					},
					{
						breakpoint:576,
						settings: {
							item:3,
							slideMove:1
						  }
					},
					{
						breakpoint:480,
						settings: {
							item:2,
							slideMove:1
						  }
					}
				]
			});
		});
	</script>
@endsection