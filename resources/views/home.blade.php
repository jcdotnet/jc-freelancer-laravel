@extends('layouts.default')

@section('head')
	<title> @lang("Jose Carlos Román Rubio | Ingeniero Informático, programador freelance") </title>
	<meta name="description" content="{{ __("Página Web de Jose Carlos Román Rubio. Ingeniero Técnico Informático (UMA). Programador y desarrollador freelance para particulares y empresas.") }}"/>
	<style>
		@font-face{font-family:FontAwesome;src:url(../fonts/fontawesome-webfont.eot?v=4.7.0);src:url(../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'),url(../fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'),url(../fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'),url(../fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'),url(../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.pull-right{float:right}.fa-envelope-o:before{content:"\F003"}.fa-check:before{content:"\F00C"}@font-face{font-family:Raleway;font-style:normal;font-weight:300;src:local("Raleway Light"),local("Raleway-Light"),url(../fonts/raleway-v12-latin-300.woff2) format("woff2"),url(../fonts/raleway-v12-latin-300.woff) format("woff")}@font-face{font-family:Raleway;font-style:italic;font-weight:300;src:local("Raleway Light Italic"),local("Raleway-LightItalic"),url(../fonts/raleway-v12-latin-300italic.woff2) format("woff2"),url(../fonts/raleway-v12-latin-300italic.woff) format("woff")}@font-face{font-family:Raleway;font-style:normal;font-weight:400;src:local("Raleway"),local("Raleway-Regular"),url(../fonts/raleway-v12-latin-regular.woff2) format("woff2"),url(../fonts/raleway-v12-latin-regular.woff) format("woff")}@font-face{font-family:Raleway;font-style:italic;font-weight:400;src:local("Raleway Italic"),local("Raleway-Italic"),url(../fonts/raleway-v12-latin-italic.woff2) format("woff2"),url(../fonts/raleway-v12-latin-italic.woff) format("woff")}@font-face{font-family:Raleway;font-style:normal;font-weight:500;src:local("Raleway Medium"),local("Raleway-Medium"),url(../fonts/raleway-v12-latin-500.woff2) format("woff2"),url(../fonts/raleway-v12-latin-500.woff) format("woff")}@font-face{font-family:Raleway;font-style:italic;font-weight:500;src:local("Raleway Medium Italic"),local("Raleway-MediumItalic"),url(../fonts/raleway-v12-latin-500italic.woff2) format("woff2"),url(../fonts/raleway-v12-latin-500italic.woff) format("woff")}@font-face{font-family:Raleway;font-style:normal;font-weight:600;src:local("Raleway SemiBold"),local("Raleway-SemiBold"),url(../fonts/raleway-v12-latin-600.woff2) format("woff2"),url(../fonts/raleway-v12-latin-600.woff) format("woff")}@font-face{font-family:Raleway;font-style:italic;font-weight:600;src:local("Raleway SemiBold Italic"),local("Raleway-SemiBoldItalic"),url(../fonts/raleway-v12-latin-600italic.woff2) format("woff2"),url(../fonts/raleway-v12-latin-600italic.woff) format("woff")}@font-face{font-family:Raleway;font-style:normal;font-weight:700;src:local("Raleway Bold"),local("Raleway-Bold"),url(../fonts/raleway-v12-latin-700.woff2) format("woff2"),url(../fonts/raleway-v12-latin-700.woff) format("woff")}@font-face{font-family:Raleway;font-style:italic;font-weight:700;src:local("Raleway Bold Italic"),local("Raleway-BoldItalic"),url(../fonts/raleway-v12-latin-700italic.woff2) format("woff2"),url(../fonts/raleway-v12-latin-700italic.woff) format("woff")}@font-face{font-family:Raleway;font-style:normal;font-weight:900;src:local("Raleway Black"),local("Raleway-Black"),url(../fonts/raleway-v12-latin-900.woff2) format("woff2"),url(../fonts/raleway-v12-latin-900.woff) format("woff")}@font-face{font-family:Raleway;font-style:italic;font-weight:900;src:local("Raleway Black Italic"),local("Raleway-BlackItalic"),url(../fonts/raleway-v12-latin-900italic.woff2) format("woff2"),url(../fonts/raleway-v12-latin-900italic.woff) format("woff")}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#868e96;--gray-dark:#343a40;--primary:#007bff;--secondary:#868e96;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";--font-family-monospace:"SFMono-Regular",Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar}button,h1,h3{font-family:inherit}@-ms-viewport{width:device-width}header,nav,section{display:block}.navbar,.row{display:-ms-flexbox;display:-webkit-box;-ms-flex-wrap:wrap}body{font-size:1rem;line-height:1.5;color:#212529;text-align:left;background-color:#fff}p,ul{margin-bottom:1rem}ul ul{margin-bottom:0}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:not([href]):not([tabindex]){color:inherit;text-decoration:none}img{vertical-align:middle;border-style:none}[role=button],a,button{-ms-touch-action:manipulation;touch-action:manipulation}button{border-radius:0;margin:0;font-size:inherit;line-height:inherit;overflow:visible;text-transform:none}.container,.container-fluid{margin-right:auto;margin-left:auto}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}.col,.col-12,.col-lg-3,.col-sm,.col-sm-6,.container,.container-fluid{width:100%;padding-right:15px;padding-left:15px}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h3{margin-bottom:.5rem;font-weight:500;line-height:1.2;color:inherit}h1{font-size:2.5rem}h3{font-size:1.75rem}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.col,.col-12{max-width:100%}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-12,.col-lg-3,.col-sm,.col-sm-6{position:relative;min-height:1px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1}.col-12{-ms-flex:0 0 100%;-webkit-box-flex:0;flex:0 0 100%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1;max-width:100%}.col-sm-6{-ms-flex:0 0 50%;-webkit-box-flex:0;flex:0 0 50%;max-width:50%}}@media (min-width:992px){.col-lg-3{-ms-flex:0 0 25%;-webkit-box-flex:0;flex:0 0 25%;max-width:25%}}.collapse{display:none}.dropdown{position:relative}.dropdown-toggle::after{width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.nav-link,.navbar{padding:.5rem 1rem}.nav-link{display:block}.navbar{position:relative;display:flex;flex-wrap:wrap;-ms-flex-align:center;-webkit-box-align:center;align-items:center;-ms-flex-pack:justify;-webkit-box-pack:justify;justify-content:space-between}.navbar>.container{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;-webkit-box-align:center;align-items:center;-ms-flex-pack:justify;-webkit-box-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-nav{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1;-ms-flex-align:center;-webkit-box-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background:0 0;border:1px solid transparent;border-radius:.25rem}@media (max-width:767px){.navbar-expand-md>.container{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md,.navbar-expand-md .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal}.navbar-expand-md{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;-webkit-box-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:-webkit-box!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}.d-none{display:none!important}@media (min-width:768px){.d-md-block{display:block!important}}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.ml-auto{margin-left:auto!important}.text-center{text-align:center!important}.navbar-expand-md{margin-top:40px;background:#121212;border-bottom:0 solid #e7e7e7;opacity:.9}.navbar-expand-md .navbar-nav>li>a{color:#FFF;padding-left:0;padding-right:10px;text-transform:uppercase;letter-spacing:1px;font-size:12px;font-weight:600;position:relative;display:block}.navbar-expand-md .navbar-nav>.active>a{color:#FDA527;background-color:transparent}.navbar-expand-md .navbar-nav>li>a:before{content:'\B7';color:#FFF;padding-right:5px}.navbar-brand img{max-height:60px}.navbar-nav>li>.dropdown-menu{background:#121212;border-bottom:0;border-left:0;border-right:0;border-top:2px solid;border-color:#FDA527;left:50px;padding:30px 20px;min-width:200px;margin-top:25px}.dropdown-menu>li>a{display:block;text-transform:capitalize;letter-spacing:1px;font-size:10px;font-weight:500;color:#FFF;height:30px;line-height:30px;text-decoration:none}.dropdown-toggle::after{display:none}.jc-toggler{right:0;background:0 0;color:#FFF}#navbar-flags a,a,a:visited{color:#FDA527;text-decoration:none}.jc-toggler-icon{position:relative;margin-top:1em}.jc-toggler-icon,.jc-toggler-icon::after,.jc-toggler-icon::before{display:inline-block;width:1.5rem;height:4px;border-radius:10px;background-color:#FFF}.jc-toggler-icon::after,.jc-toggler-icon::before{content:"";position:absolute;left:0}.jc-toggler-icon::before{top:-.5rem}.jc-toggler-icon::after{top:.5rem}#navbar-flags{display:none;margin-left:100px;position:absolute;top:10px;right:20%}#navbar-flags a{font-weight:700;line-height:50px;margin-right:5px}@media only screen and (min-width:768px){.navbar-expand-md .navbar-nav>li:first-child a:before{display:none}}@media only screen and (max-width:767px){.navbar-expand-md{margin-top:0}nav.navbar .container{width:100%}.navbar-expand-md .navbar-collapse{border:0 solid #FDA527}.navbar-brand img{max-height:40px}.navbar-nav li a{height:40px;line-height:50px;margin-left:20px}.navbar-nav>li>.dropdown-menu{border-top:0 solid;padding:0 0 0 30px;margin:0}}#main,body,html{height:100%}body,html{width:100%;margin:0;padding:0}body{font-family:Raleway,sans-serif;font-weight:400}.btn-jc,.number{font-weight:600}.btn-jc{display:inline-block;padding:14px 12px;text-transform:uppercase;color:#FFF!important;font-size:.786em;letter-spacing:2px}.btn-hero{text-transform:none;background-color:transparent;border:1px solid rgba(255,255,255,.15);letter-spacing:.5px;font-size:12px;font-family:sans-serif}.row-content{margin:0 auto;padding-top:5px;padding-bottom:20px}.size-xl{font-size:18px}#top-bar-container #top-bar{color:#888;font-size:13px;line-height:40px;padding:0}#top-bar-container #top-bar .col{background:#f8f8f8}#top-bar-container #top-bar .col a{color:#888;text-decoration:none}#top-bar-container #top-bar .col .fa{font-size:15px;padding:0 5px 0 15px}.hero.hero-top{display:table;width:100%;height:100%;background:url(../storage/images/tactile_noise.png);color:#f8f8f2;margin-top:-40px}.hero-content{display:table-cell;vertical-align:middle;text-align:center}.hero-tagline{display:inline-block;color:#FFF;font-size:14px;margin:0 auto 5px;text-transform:uppercase;letter-spacing:.5px;padding-bottom:5px;border-bottom:3px solid rgba(255,255,255,.15)}.hero-action{display:inline-block;margin:0 auto;font-size:18px;letter-spacing:1px;padding-bottom:20px}#random-service{height:200px;display:table;margin:auto}#random-service-text{display:table-cell;color:#FDA527;vertical-align:middle;text-align:center;margin:0;font-size:5em;font-weight:600;line-height:125%;text-transform:uppercase;-ms-word-wrap:break-word;word-wrap:break-word}.mensaje{min-height:450px}.mensaje-header-container{display:table;height:100px;width:100%}.mensaje-header,.mensaje-icon{display:table-cell;vertical-align:middle}.mensaje-header{color:gray;font-family:ralewaybold;text-align:center;text-transform:uppercase;height:100px}.mensaje-icon{font-size:40px;padding-top:20px;color:#FDA527}.number{display:table;font-size:25px;line-height:24px;color:#fffaf0;height:140px;width:140px;text-align:center;background:#FDA527;border-radius:100%}.number .number-content{display:table-cell;vertical-align:middle}.number span{display:block;font-size:20px;font-weight:400;text-transform:lowercase}@media only screen and (max-width:991px){#random-service{height:150px}#random-service-text{font-size:4em}}@media only screen and (max-width:767px){.hero.hero-top{margin-top:0}.hero-content{padding-left:0 50px}.hero-action{font-size:15px}#random-service{height:150px}#random-service-text{font-size:2em}.mensaje{min-height:auto}.mensaje-header{height:auto}}
	</style>
@endsection

@section('content')

<section class="hero hero-top"> 
    <div class="hero-content">
		<div class="container">
			<div class = "hero-tagline"> @lang("Ingeniero informático, programador freelance") </div>
			<div id="random-service">              
				<h1 id="random-service-text"></h1>         
			</div>
			<h3 class="hero-action"> 
				@lang("¿Necesita un profesional para su proyecto?") 
			</h3>

			<div>
				<a href="{{ route('servicios', [Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'), __("routes.servicios")]) }}" class="btn-jc btn-hero"> @lang("Más información") </a>
			</div>
        </div>
    </div>
</section>

<section id="mensajes">
    <div class="container">
        <div class="row row-content">
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">			
					<h1 class="mensaje-header"> @lang("Servicios a medida") </h1>
                </div>
                <p class="size-xl text-center"> @lang("Soy trabajador autónomo (IAE: Diplomados en informática) y ofrezco mis servicios freelance a particulares y empresas. Tarifo por proyectos completos o por fases del proyecto, emitiendo siempre factura por mi trabajo.")</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
                <div class="mensaje-header-container">
					<h1 class="mensaje-header"> @lang("Buenas prácticas") </h1>
                </div>
                <p class="size-xl text-center"> @lang("Soy un apasionado de la programación desde pequeño y tengo la carrera de ingeniería técnica en informática. Además siempre estoy realizando cursos, estoy al día en las últimas tecnologías y sigo las mejores practicas en programación.")</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">
					<h1 class="mensaje-header"> @lang("Tarifas económicas") </h1>
                </div>
                <p class="size-xl text-center"> @lang("Mis tarifas son económicas, intento dar el mejor servicio al mejor precio posible puesto que me encanta el trabajo que hago y mi meta es poder ayudar a los demás con ello. No dudes en ponerse en contacto conmigo y pedir presupuesto para tu proyecto.")</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">
					<h1 class="mensaje-header"> @lang("Dedicación total") </h1>
                </div>
                <p class="size-xl text-center"> @lang("Mi dedicación a tu idea o proyecto será total y estaremos comunicados desde el primer día hasta que finalice. If you don't speak spanish we can communicate in written English (switch please to English version above).") </p>
            </div>
        </div>
		
		<div class="row">
			<div class="col col-sm row-content" align="center">
                <div class="number">
                    <div class="number-content">
                        10+ <span> @lang("años experiencia") </span>
                    </div>
                </div>
            </div>
			<div class="col col-sm row-content" align="center">
                <div class="number">
                    <div class="number-content">
                        20+ <span> @lang("clientes") </span>
                    </div>
                </div>
            </div>
            <div class="col col-sm row-content" align="center">
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
        <div class="row justify-content-center">
			<div class="col row-header">
				<h2> @lang("¿Por qué contratar a un freelancer?") </h2>
			</div>
		</div>
		<div class="row row-content">
            <p class="size-xl">@lang("El trabajador autónomo o freelancer es la solución ideal para particulares o empresas que tengan un proyecto y busquen a un profesional que pueda adaptarse a los horarios y requerimientos del mismo. Un freelancer está continuamente formándose ya que sus ingresos no son fijos y dependen del número de clientes que tengan; por esa razón el freelancer hará un estudio del trabajo y pondrá todos sus conocimientos a la disposición del cliente para sacarlo adelante. Además, contratando a un freelancer estás ayudando a personas emprendedoras que han decidido dedicarse a lo que les gusta.")</p>
        </div>
    </div>

</section>

@endsection

@section('scripts-before')
<script>
	window.onload = function() {
		var css = document.createElement('link');
		css.rel = 'stylesheet';
		css.href = '{{ asset("css/bundle.css") }}'; 
		css.type = 'text/css';
		document.getElementsByTagName('head')[0].appendChild(css);
	};
</script>
@endsection