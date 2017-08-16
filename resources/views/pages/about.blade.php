@extends('layouts.default')

@section('title')
	<title> @lang("JC - Informático y freelancer en Málaga | Jose Carlos Román Rubio") </title>
	<meta description = "Jose Carlos Román Rubio (JC). Soy  Ingeniero Técnico Informático (Universidad de Málaga), programador, desarrollador, freelancer... Descubre más sobre mí.">
@endsection

@section('content')

<div class="container">
	<div class="row row-header">
		<h2>@lang("Qué hago")</h2>		
	</div>
	<div class="row row-content">
		<div class="col-sm-7">
			<div class="panel-body">
				<dl class="dl-horizontal">
					<dt>@lang('Trabajo')</dt>
					<dd>Software developer</dd>
					<dt>@lang('Tipo')</dt>
					<dd>Freelance</dd>
					<dt>@lang('Comienzo')</dt>
					<dd>2016</dd>
					<dt>@lang("Áreas de trabajo")</dt>
					<dd>@lang('Desarrollo Web, móvil y escritorio. Programación.') </dd>
					<dt>@lang('Números')</dt>
					<dd>@lang('Más de 20 clientes y más de 100 proyectos')</dd>
			   </dl>
			</div>
		</div>
		<div class="hidden-xs col-sm-5">
			<img src="{{ asset('images/logo1.png') }}" class="img-fluid" height="50" alt="Android development">
			<img src="{{ asset('images/logo2.png') }}" class="img-fluid" height="50" alt="Angular development">
			<img src="{{ asset('images/logo3.png') }}" class="img-fluid" height="50" alt="Apache">
			<img src="{{ asset('images/logo4.png') }}" class="img-fluid" height="50" alt="HTML">
			<img src="{{ asset('images/logo5.png') }}" class="img-fluid" height="50" alt="Ionic framework">
			<img src="{{ asset('images/logo6.png') }}" class="img-fluid" height="50" alt="JavaSctipr development">
			<img src="{{ asset('images/logo7.png') }}" class="img-fluid" height="50" alt="MySQL">
			<img src="{{ asset('images/logo8.png') }}" class="img-fluid" height="50" alt="nodeJS">
			<img src="{{ asset('images/logo9.png') }}" class="img-fluid" height="50" alt="PHP">
			<img src="{{ asset('images/logo10.png') }}" class="img-fluid" height="50" alt="Visual Studio, dot NET">
			<img src="{{ asset('images/logo11.png') }}" class="img-fluid" height="50" alt="WordPress">			
		</div>
	</div>
</div>

<div class="container">
	<div class="row-header">
		<h2>@lang('Educación')</h2>
	</div>
	<div class="row-content">
		<div class="hidden-xs col-sm-4">
			<div class="panel panel-default">
				<img src="{{ asset('images/facultad.jpg') }}" class="img-fluid img-thumbnail" alt="UMA. Universidad de Málaga">
				<div class="panel-title">
					<h4 class="center">Universidad de Málaga</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-8 center">
			<dl class="dl-vertical">
				<dt> 2014 </dt>
				<dd>
					<p>@lang('Ingeniería técnica en Informática de Sistemas.')</p>
					<p>@lang('Calificación total: NOTABLE. Calificación proyecto fin de carrera: SOBRESALIENTE.')</p>
				</dd>
				<dt> @lang("Cursos") </dt>
				<dd>					
					<p>@lang('2006. Desarrollo de aplicaciones J2EE con prácticas en Novasoft. FORMAN. Duración: 360 horas')</p>
					<p>@lang('2007. Microsoft Certified Technology Specialist (.NET Framework 2.0). FORMAN. Duración: 670 horas.')</p>
				</dd>
				
			</dl>
		</div>
	</div>
</div>

<div class="container">
	<div class="row row-header">		
		<h2>@lang("Dónde estoy")</h2>		
	</div>
	<div class="row row-content">
		<div class="col-sm-4 col-md-3 row-subheader">
			<h2>Freelancer.com</h2>
		</div>
		<div class="col-sm-8 col-md-9">
			<p class="size-l">@lang("Freelancer.com es una plataforma donde las empresas pueden encontrar profesionales. Para garantizar la seguridad Freelancer.com trabaja con un sistema de escrow, mediante el cual la empresa deposita el dinero en Freelancer.com cuando selecciona al freelancer. Una vez finalizado el proyecto, Freelancer.com libera el dinero al freelancer.")</p>
		</div>
	</div>
	<div class="row row-content row-margin center">
			<a href="https://www.freelancer.es/hireme/jcdotnet" target="_blank" class="btn-jc btn-theme">@lang("Contrátame en Freelancer.com")</a>
	</div>
	<div class="row row-content">
		<div class="col-sm-4 col-md-3 row-subheader">
			<h2>@lang("Otros")</h2>
		</div>
		<div class="col-sm-8 col-md-9">
			<dl class="dl-horizontal">
				<dt>GitHub</dt>
				<dd><a href="https://github.com/jcdotnet" target="_blank">@lang("Ver perfil")</a></dd>
				<dt>Stack Overflow</dt>
				<dd>@lang("La mayor comunidad online para programadores. ")<a href="https://stackoverflow.com/users/6463338/jcdotnet" target="_blank">@lang("Ver perfil")</a></dd>
				<dt>Udemy</dt>
				<dd>@lang("Plataforma para aprender y enseñar online. ")<a href="https://www.udemy.com/user/josecarlosromanrubio/" target="_blank">@lang("Ver perfil")</a></dd>
				<dt>Upwork</dt>
				<dd>@lang("Otra plataforma freelance. ")<a href="https://www.upwork.com/freelancers/~016889fa32b17df7fe" target="_blank">@lang("Ver perfil")</a></dd>
				<dt>WordPress</dt>
				<dd><a href="https://profiles.wordpress.org/jcrr" target="_blank">@lang("Ver perfil")</a></dd>
				<dt>YouTube</dt>
				<dd><a href="https://www.youtube.com/channel/UC9wKRs6Mgf2wR2qfjYM0-uQ" target="_blank">@lang("Ver perfil")</a></dd>
		   </dl>
		</div>
	</div>
</div>

@endsection
