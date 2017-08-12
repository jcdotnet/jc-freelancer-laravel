@extends('layouts.default')

@section('title')
	<title> @lang("Ingeniero informático y programador freelance | Jose Carlos Román Rubio") </title>
	<meta description = "Página Web de Jose Carlos Román Rubio, Ingeniero Técnico Informático (Universidad de Málaga), programador y desarrollador freelance para particulares y empresas">
@endsection

@section('content')

<section class="hero hero-top"> 
    <div class ="hero-content">
		<div class="container">
			<div class = "hero-tagline"> @lang("Ingeniero informático, programador freelance") </div>
			<div id="random-service">              
				<h1 id="random-service-text"></h1>         
			</div>
			<h3 class="hero-action"> 
				@lang("¿Necesita un profesional para su proyecto?") 
			</h3>

			<div>
				<a href="{{ route('services') }}" class="btn-jc btn-hero"> @lang("Más información") </a>
			</div>
        </div>
    </div>
</section>

<section id="mensajes">
    <div class="container">
        <div class="row row-content">
            <div class="col-xs-12 col-sm-6 col-lg-3 mensaje">
				<div class="center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">			
					<h1 class="mensaje-header"> @lang("Servicios a medida") </h1>
                </div>
                <p class="size-xl center"> @lang("Soy trabajador autónomo (actividad económica IAE: Diplomados en informática) y ofrezco mis servicios freelance a particulares y empresas. Tarifo por proyectos completos o por fases del proyecto, emitiendo siempre factura por mi trabajo.")</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 mensaje">
				<div class="center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
                <div class="mensaje-header-container">
					<h1 class="mensaje-header"> @lang("Buenas prácticas") </h1>
                </div>
                <p class="size-xl center"> @lang("Soy un apasionado de la programación desde pequeño y tengo la carrera de ingeniería técnica en informática. Además siempre estoy realizando cursos, estoy al día en las últimas tecnologías y sigo las mejores practicas en programación.")</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 mensaje">
				<div class="center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">
					<h1 class="mensaje-header"> @lang("Tarifas económicas") </h1>
                </div>
                <p class="size-xl center"> @lang("Mis tarifas son económicas, intento dar el mejor servicio al mejor precio posible puesto que me encanta el trabajo que hago y mi meta es poder ayudar a los demás con ello. No dudes en ponerse en contacto conmigo y pedir presupuesto para tu proyecto.")</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 mensaje">
				<div class="center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">
					<h1 class="mensaje-header"> @lang("Dedicación total") </h1>
                </div>
                <p class="size-xl center"> @lang("Mi dedicación a tu idea o proyecto será total y estaremos comunicados desde el primer día hasta que finalice. If you don't speak spanish we can communicate in written English (switch please to English version above).") </p>
            </div>
        </div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 row-content" align="center">
                <div class="number">
                    <div class="number-content">
                        10+ <span> @lang("años experiencia") </span>
                    </div>
                </div>
            </div>
			<div class="col-xs-12 col-sm-4 row-content" align="center">
                <div class="number">
                    <div class="number-content">
                        20+ <span> @lang("clientes") </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 row-content" align="center">
                <div class="number">
                    <div class="number-content">
                        100+ <span> @lang("Proyectos") </span>
                    </div>
                </div>
            </div>
			
		</div>
    </div>
	
	
</section>


<section id="must-know">
    <div class="container">
        <div class="row row-content center">
            <h1> @lang("¿Por qué contratar a un freelancer?") </h1>
            <p class="parrafo">@lang("El trabajador autónomo o freelancer es la solución ideal para particulares o empresas que tengan un proyecto y busquen a un profesional que pueda adaptarse a los horarios y requerimientos del mismo. Un freelancer está continuamente formándose ya que sus ingresos no son fijos y dependen del número de clientes que tengan; por esa razón el freelancer hará un estudio del trabajo y pondrá todos sus conocimientos a la disposición del cliente para sacarlo adelante. Además, contratando a un freelancer estás ayudando a personas emprendedoras que han decidido dedicarse a lo que les gusta.")</p>
        </div>
    </div>

</section>
@endsection