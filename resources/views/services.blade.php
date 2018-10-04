@extends ('layouts.default')

@section('head')
	<title>@lang("Desarrollo de software | Jose Carlos Román Rubio")</title>
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')
<section id="page-title" class="title-standard first-section">
   <div class="container">  
        <div class="row align-items-center text-center">
			<div class="col-12 title-content">
				<h1>@lang("Servicios")</h1>				
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? '': Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">@lang("Servicios")</span>
				</nav>
			</div>
		</div>
    </div>
</section>

<section id="services">
   <div class="container">
		<div class="row">
			<div class="col section-title">
				<h2><span>@lang("Servicios")</span></h2>					
			</div>			
		</div>
	</div>
</section>


<section id="escritorio-movil">
   <div class="container">
	    <div class="row">
		    <div class="col mt-3 row-header">
		       <h2> @lang("Aplicaciones de escritorio y de móvil")</h2>
			</div>
	    </div>
        <div class="row row-content">           
            <div class="col size-xl"> 
				{!! __("<ul><li>Desarrollo de aplicaciones de consola o de escritorio para Windows. </li><li>Desarrollo de aplicaciones Android usando Java y Android Studio.</li><li>Desarrollo de aplicaciones iOS y Android usando Ionic.</li></ul><p>Todas estas aplicaciones pueden incluir acceso a datos, al sistema, a servicios Web, a la nube, etc.</p>") !!}	
	       </div>
        </div>
        <div class="row row-content">
			<div class="col text-center">
				<a href="{{route('contacto', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.contacto")])}}" class="btn-jc btn-theme">@lang("Solicita presupuesto")</a>
			</div>
        </div>
    </div>
</section>


<section id="web" class="background">
    <div class="container">
		<div class="row">
		    <div class="col mt-3 row-header">
		       <h2 class="center"> @lang("Aplicaciones Web")</h2> 
			</div>
	    </div>		
        <div class="row row-content">           
            <div class="col size-xl"> 
				<ul>
					{!! __("<li> Desarrollo de aplicaciones Web (desde páginas simples hasta todo el desarrollo full-stack) usando JavaScript, PHP o .NET. </li><li> Desarrollo Front-End con frameworks MVC JavaScript (Angular) y PHP (Laravel). </li><li> Creación de APIs (servicios web basados en arquitecturas REST o SOAP) para el acceso de aplicaciones a fuentes de datos. </li><li> Eliminación de errores o advertencias. </li><li> Personalización de páginas Web. </li> <li> Adaptación de páginas Web a dispositivos móviles. </li><li> Creación de tiendas online (PrestaShop, WooCommerce). </li>") !!}
					@if (Config::get('app.locale') === "es")
						<li>Páginas Web escaparate para nuevos autónomos. Más información <strong><a href="https://josecarlosroman.com/wordpress/pagina-web-escaparate-autonomos/" target="_blank"> aquí.</a></strong></li>
					@endif
					<li><a href="{{ route('maintenance', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.mantenimiento-web")]) }}">@lang("Mantenimiento Web")</a></li>
				</ul>
			</div>                    
        </div>
        <div class="row row-content">
			<div class="col text-center">
				<a href="{{route('contacto', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.contacto")])}}" class="btn-jc btn-theme">@lang("Solicita presupuesto")</a>
			</div>           
        </div>
     </div>
</section> 


<section id="wordpress">
    <div class="container">
		<div class="row">
		    <div class="col mt-3 row-header">
		       <h2 class="center"> @lang('WordPress')</h2>
			</div>
	    </div>
        <div class="row row-content">           
            <div class="col-12 size-xl"> {!! __("<p>WordPress se ha convertido en la <span class='highlighted'>herramienta más usada hoy en día para crear páginas Web</span>. Por eso he decidido crear un apartado específico para este gestor de contenidos. ¿Por qué es tan popular WordPress? WordPress es fácil de instalar, tienes un tema o un plugin para practicamente todo lo que necesites y una gran comunidad de desarrolladores detrás; además es buena opción para el SEO.")!!} </div> 
			<div class="col-12 size-xl"> {!! __("A continuación te ofrezco mis servicios para que tengas <span class='highlighted'>tu propia página en WordPress actualizada, segura y fácil de administrar.</span></p>") !!}</div>
            <div class="col-12 size-xl"> {!! __("<ul><li> Desarrollo de tu página Web personal o corporativa. </li><li> Instalación de WordPress con los plugins necesarios para que puedas añadir tu contenido. </li><li> Instalación y personalización de un tema WordPress. </li><li> Traducción de temas. </li><li> Mejora en el rendimiento, seguridad y SEO de tu Web </li><li> Creación de temas a partir de plantillas HTML. </li><li> Desarrollo de temas desde cero. </li><li> Desarrollo de plugins. </li></ul>") !!}</div>			
		</div>
		<div class="row row-content">
			<div class="col text-center">
				<a href="http://josecarlosroman.com/wordpress/" class="btn-jc btn-theme"> @lang("Más información")</a>
			</div>           
        </div>
		<div class="row row-content">
			<div class="col text-center">
				<a href="{{route('contacto', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.contacto")])}}" class="btn-jc btn-theme">@lang("Solicita presupuesto")</a>
			</div>           
        </div>
    </div>
</section> 


<section id="programming" class="background">
   <div class="container">
	   <div class="row">
		    <div class="col mt-3 row-header">
		       <h2 class="center"> @lang("Programación")</h2>
			</div>
	    </div>	   
        <div class="row row-content">           
            <div class="col size-xl"> {!! __("<ul><li>Ayuda en tareas de programación, eliminación de errores, migración de código, mejora de rendimiento, etc.</li></ul><p>Si tienes un proyecto y piensas que no encaja con los servicios ofrecidos arriba no dudes en ponerte en contacto conmigo para estudiar su viabilidad, te atenderé lo antes posible.</p>") !!} </div>
        </div>
	    <div class="row row-content">
			<div class="col text-center">
				<a href="{{route('contacto', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.contacto")])}}" class="btn-jc btn-theme">@lang("Contacta conmigo")</a>
			</div>           
        </div>
    </div>
</section> 

@if (Config::get('app.locale') === "es")
<section id="rates">
   <div class="container">
		<div class="row">
			<div class="col section-title">
				<h2><span>@lang("Tarifas")</span></h2>	
				<p>
					@lang("Tarifo por proyectos completos o por fases del proyecto (milestones) tras acordar el precio entre ambas partes. En el caso de no establecer un precio fijo mis tarifas son las que ofrezco a continuación.") 			
				</p>				
			</div>			
		</div>
	</div>

  
	<div class="container">
		<div class="row">
			<div class="col-12 section-subtitle">
				<h2>@lang("Días laborables")</h2>	
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>20€</strong> + IVA </h4>
				<p class="text-muted"> Precio por hora </p>
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>50€</strong> + IVA </h4>
				<p class="text-muted"> Media jornada (hasta 4 horas) <br> <strong>20€</strong> + IVA por cada hora extra </p>
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>100€</strong> + IVA </h4>
				<p class="text-muted"> Jornada completa (hasta 8 horas) <br> <strong>20€</strong> + IVA por cada hora extra </p>
			</div>
		</div>

		<div class="row">
			<div class="col-12 section-subtitle">
				<h2>@lang("Sábados")</h2>	
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>30€</strong> + IVA </h3>
				<p class="text-muted"> Precio por hora </p>
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>70€</strong> + IVA </h3>
				<p class="text-muted"> Media jornada (hasta 4 horas) <br> <strong>30€</strong> + IVA por cada hora extra </p>
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>150€</strong> + IVA </h3>
				<p class="text-muted"> Jornada completa (hasta 8 horas) <br> <strong>30€</strong> + IVA por cada hora extra </p>
			</div>
		</div>

		<div class="row">
			<div class="col-12 section-subtitle">
				<h2>@lang("Festivos")</h2>	
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>40€</strong> + IVA </h4>
				<p class="text-muted"> Precio por hora </p>
			</div>
			<div class="col-sm-4 text-center"> 
				<h4> <strong>100€</strong> + IVA </h4>
				<p class="text-muted"> Media jornada (hasta 4 horas) <br> <strong>40€</strong> + IVA por cada hora extra </p>
			</div>
			<div class="col-sm-4 text-center mb-5"> 
				<h4> <strong>200€</strong> + IVA </h4>
				<p class="text-muted"> Jornada completa (hasta 8 horas) <br> <strong>40€</strong> + IVA por cada hora extra </p>
			</div>
		</div>
	</div>

</section>

@endif 
 
@endsection