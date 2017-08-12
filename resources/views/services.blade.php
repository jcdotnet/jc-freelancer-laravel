@extends ('layouts.default')

@section('title')
	<title>@lang("Desarrollo de software | Jose Carlos Román Rubio")</title>
@endsection

@section('content')
<section id="breadscrumb" class="first-section">
   <div class="container">    
        <div class="row breadscrumb-container">
            <div>
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}"> @lang("Inicio")  </a></li>
                    <li class="active"> @lang("Servicios")</li>
               </ul>
            </div>

            <div>
                <h3> @lang("Servicios") </h3>
                <hr>
            </div>
        </div>
    </div>
</section>


<section id="escritorio-movil">
   <div class="container">
       <div class="row row-content">
            <h1 class="center"> @lang("Aplicaciones de escritorio y de móvil")</h1>
            <div class="parrafo"> 
				@lang("<ul><li>Desarrollo de aplicaciones de consola o de escritorio para Windows. </li><li>Desarrollo de aplicaciones Android usando Java y Android Studio.</li><li>Desarrollo de aplicaciones iOS y Android usando angular e ionic.</li></ul><p>Todas estas aplicaciones pueden incluir acceso a datos, al sistema, a servicios Web, a la nube, etc.</p>")				
	       </div>
        </div>
        <div class="row row-content center">
            <a href="{{route('contact')}}" class="btn-jc btn-theme">@lang("Solicita presupuesto")</a>
        </div>
    </div>
</section>


<section id="web" class="background">
      <div class="container">
          <div class="row row-content">
            <h1 class="center"> @lang("Aplicaciones Web")</h1>    
            <div class="parrafo"> @lang("<ul><li> Desarrollo de aplicaciones Web (desde páginas simples hasta todo el full-stack) usando JavaScript, PHP o .NET. </li><li> Creación de APIs (servicios web basados en arquitecturas REST o SOAP) para el acceso de aplicaciones a fuentes de datos. </li><li> Eliminación de errores o advertencias. </li><li> Personalización de páginas Web. </li> <li> Adaptación de páginas Web a dispositivos móviles. </li><li> Creación de tiendas online (PrestaShop, WooCommerce). </li></ul>")</div>                    
         </div>
         <div class="row row-content center">
            <a href="{{route('contact')}}" class="btn-jc btn-theme">@lang("Solicita presupuesto")</a>
        </div>
     </div>
</section> 


<section id="wordpress">
    <div class="container">
        <div class="row row-content">
            <h1 class="center"> @lang('WordPress')</h1>
            <div class="parrafo"> @lang("<p>WordPress se ha convertido en la <span class='highlighted'>herramienta más usada hoy en día para crear páginas Web</span>. Por eso he decidido crear un apartado específico para este gestor de contenidos. ¿Por qué es tan popular WordPress? WordPress es fácil de instalar, tienes un tema o un plugin para practicamente todo lo que necesites y una gran comunidad de desarrolladores detrás; además es buena opción para el SEO.")
			<div class="parrafo"> @lang("A continuación te ofrezco mis servicios para que tengas <span class='highlighted'>tu propia página en WordPress actualizada, segura y fácil de administrar.</span></p>")</div>
            <div class="parrafo"> @lang("<ul><li> Desarrollo de tu página Web personal o corporativa. </li><li> Instalación de WordPress con los plugins necesarios para que puedas añadir tu contenido. </li><li> Instalación y personalización de un tema WordPress. </li><li> Traducción de temas. </li><li> Mejora en el rendimiento, seguridad y SEO de tu Web </li><li> Creación de temas a partir de plantillas HTML. </li><li> Desarrollo de temas desde cero. </li><li> Desarrollo de plugins. </li></ul>")</div>
        </div>
        <div class="row row-content center">
            <a href="http://josecarlosroman.com/wordpress" class="btn-jc btn-theme"> @lang("Más información")</a>
        </div>
        <div class="row row-content center">
            <a href="{{route('contact')}}" class="btn-jc btn-theme">@lang("Solicita presupuesto")</a>
        </div>
    </div>
</section> 


<section id="programming" class="background">
   <div class="container">
       <div class="row row-content">
            <h1 class="center"> @lang("Programación")</h1>
            <div class="parrafo"> @lang("<ul><li>Ayuda en tareas de programación, eliminación de errores, migración de código, mejora de rendimiento, etc.</li></ul><p>Si tienes un proyecto y piensas que no encaja con los servicios ofrecidos arriba no dudes en ponerte en contacto conmigo para estudiar su viabilidad, te atenderé lo antes posible.</p>")</div>
        </div>
        <div class="row row-content center">
            <a href="{{route('contact')}}" class="btn-jc btn-theme">@lang("Contacta conmigo")</a>
        </div>
    </div>
</section> 
 
 
<section id="testimonials">
   <br><br><br>
   <div class="container">    
        <div class="row row-content">
            <div class="well">
                <blockquote>
                    <p> Jc es un brillante programador. Es responsable, apasionado de su trabajo, y tiene muy buen criterio a la hora de afrontar el diseño de cualquier proyecto, además de una gran capacidad para aprender nuevas tecnologías en poco tiempo.</p>
                    <footer>Antonio Márquez Marín,
                        <cite>Software engineer</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>
@endsection