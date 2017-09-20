@extends('layouts.default')

@section('head')
	<title> @lang("JC, freelancer en Málaga | Jose Carlos Román Rubio") </title>
	<meta name="description" content=" {{ __("Jose Carlos Román Rubio (JC). Soy  Ingeniero Técnico Informático (Universidad de Málaga), programador, desarrollador, freelancer... Descubre más sobre mí.") }}">
@endsection

@section('content')

<section id="breadscrumb" class="first-section">
   <div class="container">    
        <div class="row">
			<div class="col">
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">@lang("Sobre mí")</span>
				</nav>
			</div>
		</div>
    </div>
</section>

<div class="container">
	<div class="row">
		<div class="col row-header">
			<h2>@lang("Qué hago")</h2>	
		</div>
	</div>
	<div class="row row-content">
		<div class="col-md-7">		
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
		   </dl>			
		</div>
		<div class="hidden-sm-down col-md-5">
			<img src="{{ asset('images/logo1.png') }}" height="50px" alt="Android development">
			<img src="{{ asset('images/logo2.png') }}" height="50px" alt="Angular development">
			<img src="{{ asset('images/logo3.png') }}" height="50px" alt="Apache">
			<img src="{{ asset('images/logo4.png') }}" height="50px" alt="HTML">
			<img src="{{ asset('images/logo5.png') }}" height="50px" alt="Ionic framework">
			<img src="{{ asset('images/logo6.png') }}" height="50px" alt="JavaSctipr development">
			<img src="{{ asset('images/logo7.png') }}" height="50px" alt="MySQL">
			<img src="{{ asset('images/logo8.png') }}" height="50px" alt="nodeJS">
			<img src="{{ asset('images/logo9.png') }}" height="50px" alt="PHP">
			<img src="{{ asset('images/logo10.png') }}" height="50px" alt="Visual Studio, dot NET">
			<img src="{{ asset('images/logo11.png') }}" height="50px" alt="WordPress">			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col row-header">
			<h2>@lang('Educación')</h2>
		</div>
	</div>
	<div class="row row-content">
		<div class="hidden-sm-down col-md-4">
			<div class="card">
				<img class="card-img-top img-fluid" src="{{ asset('images/facultad.jpg') }}" alt="UMA. Universidad de Málaga">
				<div class="card-block">
				  <h4 class="card-title">Universidad de Málaga</h4>
				  <p class="card-text">ETS Ingeniería Informática.</p>
				</div>
			</div>
		</div>
		<div class="col-md-8">
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
			</dl>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">	
		<div class="col row-header">
			<h2>@lang("Dónde estoy")</h2>
		</div>
	</div>
	<div class="row row-content">
		<div class="col-md-5 col-lg-3 row-subheader align-self-center">
			<h2>Freelancer.com</h2>
		</div>
		<div class="col-md-7 col-lg-9">
			<p class="size-l">@lang("Freelancer.com es una plataforma donde las empresas pueden encontrar profesionales. Para garantizar la seguridad Freelancer.com trabaja con un sistema de escrow, mediante el cual la empresa deposita el dinero en Freelancer.com cuando selecciona al freelancer. Una vez finalizado el proyecto, Freelancer.com libera el dinero al freelancer.")</p>
		</div>
	</div>
	<div class="row justify-content-center mb-5">
		<div class="offset-md-5 offset-lg-3">
			<a href="https://www.freelancer.es/hireme/jcdotnet" target="_blank" class="btn-jc btn-theme">@lang("Contrátame en Freelancer.com")</a>
		</div>
	</div>
	
	<div class="row row-content">
		<div class="col-sm-5 col-md-3 row-subheader align-self-center">
			<h2>@lang("Otros")</h2>
		</div>
		<div class="col-sm-7 col-md-9">
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
