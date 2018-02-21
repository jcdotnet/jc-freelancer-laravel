@extends('layouts.default')

@section('head')
<title> @lang("Mantenimiento Web | Jose Carlos Román Rubio") </title>
<meta name="description" content=" {{ __("Mantenimiento Web. ¿En qué consiste y por qué debo contratar los servicios de un freelancer?, ¿Cuánto cuesta? Todas las respuestas en esta página.") }}">
<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')
<section id="page-title" class="title-standard first-section">
   <div class="container">  
        <div class="row align-items-center text-center">
			<div class="col-12 title-content">
				<h1>@lang("Mantenimiento Web")</h1>				
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">@lang("Mantenimiento Web")</span>
				</nav>
			</div>
		</div>
    </div>
</section>

<section id="mantenimiento-web" class="size-l">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<img src="{{ asset('storage/images/maintenance.png') }}" class="img-fluid" width="50%" alt="Mantenimiento Web Maintenance">
			</div>
		</div>
		<div class="row">
			<div class="col section-subtitle">
				<h2>@lang("El mantenimiento Web, ¿por qué es importante?")</h2>	
			</div>
		</div>
		<div class="row row-content">
			<div class="col-12">	

				<p>@lang("El mantenimiento de tu página o aplicación Web, y el mantenimiento de una aplicación en general, es muy importante si realmente te importa y quieres dar una buena imagen a tus visitantes o clientes. Piensa en el mantenimiento de tu hogar, de tu coche. El mantenimiento de tu Web consiste en exactamente lo mismo.") </p>

				<p>@lang("<strong>¿Qué pasa si no la mantienes?</strong> Pues depende, y depende de muchos factores. Puede que alguna funcionalidad empiece a fallar, que se muestren errores, que sea vulnerable y te ataquen o puedes que no pase nada pero eso es muy complicado.")</p> 

				<p>@lang("Al final siempre va a fallar algo. Es como el ejemplo del coche, puedes tener suerte pero si no lo mantienes te empezará a dar problemas.") </p>

				<p>@lang("<strong>He visto muchas páginas Webs que a las semanas o pocos meses de su creación ya no funcionaban. </strong>Muchas de ellas con un error 500 del servidor. Y lo curioso de todo esto es que en muchos de los casos ni los propietarios sabían que su Web no iba.")</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col section-subtitle">
				<h2>@lang("¿Quién me hace el mantenimiento Web?")</h2>	
			</div>
		</div>
		<div class="row row-content">
			<div class="col-12">	

				<p>@lang("El mantenimiento debe llevarlo un profesional. Si has contratado a un desarrollador Web lo normal es que te lo lleve él ya que es quien mejor conoce el trabajo que se ha hecho con la página.")</p>

				<p>@lang("De hecho dentro del desarrollo Web no entra solo la creación de la página o aplicación Web. El desarrollo consiste en su análisis previo, diseño, implementación y mantenimiento. Si el profesional no te habla de mantenimiento posiblemente no sea un desarrollador Web.")</p>

				<p>@lang("<strong>En el caso de que no te ofrezcan mantenimiento o tengas ya tu página o aplicación Web te recomiendo que te pongas en contacto con un profesional.</strong>")</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col section-subtitle">
				<h2>@lang("¿Qué entra en el mantenimiento Web?")</h2>	
			</div>
		</div>
		<div class="row row-content">
			<div class="col-12">	

				<p>@lang("Cada Web es diferente y por lo tanto <span class=\"highlighted\"> para cada Web las tareas a llevar a cabo son diferentes, pero el objetivo es el mismo: Que tu Web esté siempre igual que estaba cuando la creaste.</span>") </p>

				<p>@lang("Podemos decir entonces que el profesional se encarga de tareas como actualizaciones o correcciones de posibles errores para que estés tranquilo/a en todo momento.")</p>

				<p>@lang("Esas son las tareas que el cliente \"no ve\". Luego están las tareas que el cliente necesita y aquí es donde hay que diferenciar qué es mantenimiento y qué no.")</p>

				<p>@lang("<strong>El freelancer o la empresa que se encarga del mantenimiento tiene que preocuparse de que la Web esté siempre igual y trabajar sobre el contenido existente, pero no de añadir nuevas funcionalidades o ampliarla.</strong>")</p>

				<p>@lang("Puedes pedirle al profesional que te cambie algún texto existente, que te mire algo que no entiendas o que te corrija algo que está mal. Es decir, trabajar con el contenido existente.")</p>

				<p>@lang("No puedes pedirle que te convierta una página Web escaparate en una tienda online o que te convierta una Web en multilingüe, por ejemplo.") </p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col section-subtitle">
				<h2>@lang("¿Cuánto cuesta?")</h2>	
			</div>
		</div>
		<div class="row row-content">
			<div class="col-12">	
				<p>@lang("De nuevo, depende de la página o aplicación Web. Lo que desaconsejo totalmente es contratar a un freelancer o a una empresa que cobre por horas.") </p>
                
				@if (Config::get('app.locale') === "es")
					<p><strong>Lo que se busca con el mantenimiento es pagar una cantidad mensual y olvidarte de todo.</strong> Si te cobran por horas, da igual lo barata que sea la hora, puedes tener varios  problemas:  
						que el mantenimiento te salga muy caro, que el profesional le termine dedicando menos tiempo porque el cliente no quiere pagar más, que el profesional quiera engañar al cliente para 
						trabajar más horas, que surja un problema y se necesiten varias horas para solucionarlo, etc. 
					</p>
                    <blockquote>
						<p class="ml-5">Voy a poner un ejemplo. A uno de mis clientes empezó a fallarle el envío por correo y me dijo que se lo mirara. Pues bien, ese error era causado por un plugin de WordPress que tiene
							más de 300.000 instalaciones activas por lo que todas las páginas creadas con WordPress que usaban ese plugin tenían ese problema. El foro de soporte de ese plugin llevaba varias semanas colapsado con hilos
							de usuarios que querían una solución. En ese caso concreto tardé más de 10 horas en dar con la solución porque los desarrolladores del plugin aseguraban que el problema no era de ellos. 
							Sí, si lo era, y de camino ayudé a muchísima gente. Por eso no me gusta cobrar por horas, imaginemos que lo hubiera hecho. O imaginemos los que llevaban semanas buscando la solución...    
						</p>
					</blockquote>
                    <p>Volviendo a la pregunta inicial, si contratas por horas es difícil llevar un control. Si pagas una cantidad mensual ya depende de la complejidad de la Web. </p>
                @endif
				
				<p>@lang("<span class=\"highlighted\">Entre los servicios que ofrezco en esta página se encuentra el de <em>Mantenimiento Web.</em></span> Ofrezco a mis clientes mantenimientos por tan SOLO 30 euros al mes. Esa tarifa puede aumentar dependiendo de la complejidad de tu Web, aunque en la mayoría de los casos no superará los 50-100 euros por página Web.")</p>
			</div>
			<div class="col-12 mt-2 mb-4 jc-click-to-tweet">			
				<a href="@lang('https://ctt.ec/SHQRL')" target="_blank">@lang("El mantenimiento de tu Web desde tan solo 30 euros al mes.")</a>
			</div>
			<div class="col-12">
				<p>@lang("Para más información no dudes en ")<a href="{{route('contacto', [Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.contacto")])}}">@lang("contactar conmigo")</a>. @lang("Como siempre te atenderé encantado y me implicaré totalmente con tu proyecto.")</p>
			</div>
		</div>
	</div>
</section>

@endsection