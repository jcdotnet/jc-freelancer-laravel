@extends('layouts.default')

@section('head')
	<title> @lang("José Carlos Román Rubio | Ingeniero Informático, programador freelance") </title>
	<meta name="description" content="{{ __("Página Web de José Carlos Román Rubio. Ingeniero Técnico Informático (UMA). Freelancer. Programador y desarrollador para autónomos y empresas.") }}"/>
	<style>
		/* Above the fold content */
		@font-face{font-family:'FontAwesome';src:url('../fonts/fontawesome-webfont.eot?v=4.7.0');src:url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.pull-right{float:right}.fa-envelope-o:before{content:"\F003"}.fa-check:before{content:"\F00C"}@charset "UTF-8";@font-face{font-family:'Raleway';font-style:normal;font-weight:300;src:local("Raleway Light"),local("Raleway-Light"),url("../fonts/raleway-v12-latin-300.woff2") format("woff2"),url("../fonts/raleway-v12-latin-300.woff") format("woff")}@font-face{font-family:'Raleway';font-style:italic;font-weight:300;src:local("Raleway Light Italic"),local("Raleway-LightItalic"),url("../fonts/raleway-v12-latin-300italic.woff2") format("woff2"),url("../fonts/raleway-v12-latin-300italic.woff") format("woff")}@font-face{font-family:'Raleway';font-style:normal;font-weight:400;src:local("Raleway"),local("Raleway-Regular"),url("../fonts/raleway-v12-latin-regular.woff2") format("woff2"),url("../fonts/raleway-v12-latin-regular.woff") format("woff")}@font-face{font-family:'Raleway';font-style:italic;font-weight:400;src:local("Raleway Italic"),local("Raleway-Italic"),url("../fonts/raleway-v12-latin-italic.woff2") format("woff2"),url("../fonts/raleway-v12-latin-italic.woff") format("woff")}@font-face{font-family:'Raleway';font-style:normal;font-weight:500;src:local("Raleway Medium"),local("Raleway-Medium"),url("../fonts/raleway-v12-latin-500.woff2") format("woff2"),url("../fonts/raleway-v12-latin-500.woff") format("woff")}@font-face{font-family:'Raleway';font-style:italic;font-weight:500;src:local("Raleway Medium Italic"),local("Raleway-MediumItalic"),url("../fonts/raleway-v12-latin-500italic.woff2") format("woff2"),url("../fonts/raleway-v12-latin-500italic.woff") format("woff")}@font-face{font-family:'Raleway';font-style:normal;font-weight:600;src:local("Raleway SemiBold"),local("Raleway-SemiBold"),url("../fonts/raleway-v12-latin-600.woff2") format("woff2"),url("../fonts/raleway-v12-latin-600.woff") format("woff")}@font-face{font-family:'Raleway';font-style:italic;font-weight:600;src:local("Raleway SemiBold Italic"),local("Raleway-SemiBoldItalic"),url("../fonts/raleway-v12-latin-600italic.woff2") format("woff2"),url("../fonts/raleway-v12-latin-600italic.woff") format("woff")}@font-face{font-family:'Raleway';font-style:normal;font-weight:700;src:local("Raleway Bold"),local("Raleway-Bold"),url("../fonts/raleway-v12-latin-700.woff2") format("woff2"),url("../fonts/raleway-v12-latin-700.woff") format("woff")}@font-face{font-family:'Raleway';font-style:italic;font-weight:700;src:local("Raleway Bold Italic"),local("Raleway-BoldItalic"),url("../fonts/raleway-v12-latin-700italic.woff2") format("woff2"),url("../fonts/raleway-v12-latin-700italic.woff") format("woff")}@font-face{font-family:'Raleway';font-style:normal;font-weight:900;src:local("Raleway Black"),local("Raleway-Black"),url("../fonts/raleway-v12-latin-900.woff2") format("woff2"),url("../fonts/raleway-v12-latin-900.woff") format("woff")}@font-face{font-family:'Raleway';font-style:italic;font-weight:900;src:local("Raleway Black Italic"),local("Raleway-BlackItalic"),url("../fonts/raleway-v12-latin-900italic.woff2") format("woff2"),url("../fonts/raleway-v12-latin-900italic.woff") format("woff")}:root{--blue: #007bff;--indigo: #6610f2;--purple: #6f42c1;--pink: #e83e8c;--red: #dc3545;--orange: #fd7e14;--yellow: #ffc107;--green: #28a745;--teal: #20c997;--cyan: #17a2b8;--white: #fff;--gray: #868e96;--gray-dark: #343a40;--primary: #007bff;--secondary: #868e96;--success: #28a745;--info: #17a2b8;--warning: #ffc107;--danger: #dc3545;--light: #f8f9fa;--dark: #343a40;--breakpoint-xs: 0;--breakpoint-sm: 576px;--breakpoint-md: 768px;--breakpoint-lg: 992px;--breakpoint-xl: 1200px;--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";--font-family-monospace: "SFMono-Regular",Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar}@-ms-viewport{width:device-width}header,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h1,h3{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}a:not([href]):not([tabindex]){color:inherit;text-decoration:none}img{vertical-align:middle;border-style:none}[role=button],a,button{-ms-touch-action:manipulation;touch-action:manipulation}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}h1{font-size:2.5rem}h3{font-size:1.75rem}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-12,.col-lg-3,.col-sm,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1;max-width:100%}.col-12{-ms-flex:0 0 100%;-webkit-box-flex:0;flex:0 0 100%;max-width:100%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1;max-width:100%}.col-sm-6{-ms-flex:0 0 50%;-webkit-box-flex:0;flex:0 0 50%;max-width:50%}}@media (min-width:992px){.col-lg-3{-ms-flex:0 0 25%;-webkit-box-flex:0;flex:0 0 25%;max-width:25%}}.collapse{display:none}.dropdown{position:relative}.dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,0.15);border-radius:.25rem}.nav-link{display:block;padding:.5rem 1rem}.navbar{position:relative;display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;-webkit-box-align:center;align-items:center;-ms-flex-pack:justify;-webkit-box-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar>.container{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;-webkit-box-align:center;align-items:center;-ms-flex-pack:justify;-webkit-box-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-nav{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1;-ms-flex-align:center;-webkit-box-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background:0 0;border:1px solid transparent;border-radius:.25rem}@media (max-width:767px){.navbar-expand-md>.container{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-ms-flex-flow:row nowrap;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row nowrap;-ms-flex-pack:start;-webkit-box-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-ms-flex-direction:row;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:-webkit-box!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}.d-none{display:none!important}@media (min-width:768px){.d-md-block{display:block!important}}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.ml-auto{margin-left:auto!important}.text-center{text-align:center!important}#top-bar-container #top-bar{color:#121212;font-size:13px;line-height:40px;padding:0px}#top-bar-container #top-bar .col{background:#FFF}#top-bar-container #top-bar .col a{color:#121212;text-decoration:none}#top-bar-container #top-bar .col .fa{font-size:15px;padding:0px 5px 0px 15px}.navbar-expand-md{background:#FFF;border-bottom:2px solid #DDD;-webkit-box-shadow:0 0 transparent,0 0 transparent,0 5px 5px -4px rgba(0,0,0,0.1);box-shadow:0 0 transparent,0 0 transparent,0 5px 5px -4px rgba(0,0,0,0.1)}.navbar-expand-md.navbar-hero{background: transparent;box-shadow: none;border-bottom: none}.navbar-expand-md.navbar-hero:hover{background: rgba(0, 0, 0, 0.9)}.navbar-expand-md.fixed-top{top:40px}.navbar-expand-md .navbar-nav>li>a{color:#121212;padding-left:0px;padding-right:10px;text-transform:uppercase;letter-spacing:1px;font-size:12px;font-weight:600;position:relative;display:block}.navbar-expand-md .navbar-nav>.active>a{color:#008EC2;background-color:transparent}.navbar-expand-md .navbar-nav>li>a:before{content:'\B7';color:#121212;padding-right:5px}.navbar-expand-md .navbar-nav>li>.dropdown-menu{background:#FFF;border-radius:0;padding:30px 20px;min-width:200px;margin-top:0px}.navbar-expand-md .dropdown-menu>li>a{display:block;text-transform:capitalize;letter-spacing:1px;font-size:10px;font-weight:500;color:#121212;height:30px;line-height:30px;text-decoration:none}.navbar-brand img{max-height:60px}.jc-toggler{right:0px;background:transparent}.jc-toggler-icon{position:relative;margin-top:1em}.jc-toggler-icon,.jc-toggler-icon::before,.jc-toggler-icon::after{display:inline-block;width:1.5rem;height:4px;border-radius:10px;background-color:#008EC2}.jc-toggler-icon::before,.jc-toggler-icon::after{content:"";position:absolute;left:0}.jc-toggler-icon::before{top:-0.5rem}.jc-toggler-icon::after{top:0.5rem}#navbar-flags{display:none;margin-left:100px;position:absolute;top:10px;right:20%}#navbar-flags a{text-decoration:none;font-weight:bold;line-height:50px;margin-right:5px;color:#008EC2}.dropdown-toggle::after{display:none}@media only screen and (min-width:768px){.navbar-expand-md .navbar-nav>li:first-child a:before{display:none}}@media only screen and (max-width:767px){.navbar-expand-md{margin-top:0px}.navbar-expand-md.fixed-top{top: 0px;}.navbar-expand-md .navbar-collapse{border:none}.navbar-expand-md .navbar-brand img{max-height:40px}nav.navbar .container{width:100%}.navbar-nav li a{height:40px;line-height:50px;margin-left:20px}.navbar-nav>li>.dropdown-menu{padding:0px 0px 0px 30px;margin:0px}}.hero{display:table;width:100%;height:100%;color:#f8f8f2;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.5)),to(rgba(0,0,0,0.5))),url(../storage/images/jc_home.jpg);background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../storage/images/jc_home.jpg);background-position:center top;background-size:cover}.hero .hero-content{display:table-cell;vertical-align:middle;text-align:center}.hero .hero-title{display:inline-block;color:#FFF;font-size:14px;margin:0 auto;text-transform:uppercase;letter-spacing:0.5px;border-bottom:3px solid rgba(255,255,255,0.15);margin-bottom:5px}.hero .hero-action{display:inline-block;margin:0px auto;font-size:18px;letter-spacing:1px;padding-bottom:20px}#random-service{height:200px;display:table;margin:auto}#random-service-text{display:table-cell;color:#008EC2;vertical-align:middle;text-align:center;margin:0;font-size:5em;font-weight:600;line-height:125%;text-transform:uppercase;-ms-word-wrap:break-word;word-wrap:break-word}@media only screen and (max-width:991px){#random-service{height:150px}#random-service-text{font-size:4em}}@media only screen and (max-width:767px){.hero-action{font-size:15px}#random-service{height:150px}#random-service-text{font-size:2em}}html,body{width:100%;height:100%;margin:0px;padding:0px}body{font-family:'Raleway',sans-serif;font-weight:normal;font-size:16px;color:#444;line-height:1.7}a,a:visited{color:#008EC2;text-decoration:none}#main{height:100%}.btn-jc{display:inline-block;padding:14px 12px;text-transform:uppercase;color:#FFF!important;font-size:0.786em;font-weight:600;letter-spacing:2px}.btn-hero{text-transform:none;background-color:transparent;border:1px solid rgba(255,255,255,0.15);letter-spacing:0.5px;font-size:12px;font-family:sans-serif}.size-xl{font-size:17px}.row-content{padding-top:5px;padding-bottom:20px}.mensaje{min-height:400px}.mensaje-header-container{display:table;height:70px;width:100%}.mensaje-header{display:table-cell;color:gray;font-family:ralewaybold;text-align:center;text-transform:uppercase;vertical-align:top}.mensaje-icon{font-size:40px;display:table-cell;vertical-align:middle;padding-top:20px;color:#008EC2}.number{display:table;font-size:25px;font-weight:600;line-height:24px;color:floralwhite;height:140px;width:140px;text-align:center;background:#008EC2;border-radius:100%}.number .number-content{display:table-cell;vertical-align:middle}.number span{display:block;font-size:20px;font-weight:normal;text-transform:lowercase}@media only screen and (max-width:991px){.mensaje-header-container{height:auto;margin-bottom:0.5rem}.mensaje{min-height:inherit}}@media only screen and (max-width:767px){.mensaje-header{height:auto}}
	</style>
@endsection

@section('content')

<section class="hero"> 
    <div class="hero-content">
		<div class="container">
			<div class="hero-title"> @lang("Ingeniero informático, programador freelance") </div>
			<div id="random-service">              
				<h2 id="random-service-text"></h2>         
			</div>
			<div class="hero-action"> 
				@lang("¿Necesita un profesional para su proyecto?") 
			</div>

			<div>
				<a href="{{ route('servicios', [Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'), __("routes.servicios")]) }}" class="btn-jc btn-hero"> @lang("Más información") </a>
			</div>
        </div>
    </div>
</section>

<section id="mensajes" class="background">
	
    <div class="container">
		<div class="row section-title">
			<div class="col-12">
				<h2>
					{!! __("Tu proyecto <span>en las mejores manos</span>") !!}
				</h2>
				<p>@lang("Si has llegado hasta aquí probablemente estés buscando un programador. Quizás un desarrollador Web o simplemente un profesional freelance que pueda ayudarte. Si es así has llegado al sitio correcto: Me dedico profesionalmente al desarrollo de aplicaciones informáticas y a continuación puedes ver todo lo que te ofrezco.")</p>
			</div>			
		</div> 
		
        <div class="row row-content">
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">			
					<h3 class="mensaje-header"> @lang("Servicios a medida") </h3>
                </div>
                <p class="size-xl text-center"> @lang("Soy trabajador autónomo (IAE: Diplomados en informática) y ofrezco mis servicios freelance a particulares y empresas. Tarifo por proyectos completos o por fases del proyecto, emitiendo siempre factura por mi trabajo.")</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
                <div class="mensaje-header-container">
					<h3 class="mensaje-header"> @lang("Buenas prácticas") </h3>
                </div>
                <p class="size-xl text-center"> @lang("Soy un apasionado de la programación desde pequeño y tengo la carrera de ingeniería técnica en informática. Además siempre estoy realizando cursos, estoy al día en las últimas tecnologías y sigo las mejores practicas en programación.")</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">
					<h3 class="mensaje-header"> @lang("Tarifas económicas") </h3>
                </div>
                <p class="size-xl text-center"> @lang("Mis tarifas son económicas, intento dar el mejor servicio al mejor precio posible puesto que me encanta el trabajo que hago y mi meta es poder ayudar a los demás con ello. No dudes en ponerte en contacto conmigo y pedir presupuesto para tu proyecto.")</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mensaje">
				<div class="text-center">
					<span><i class="fa fa-check mensaje-icon" aria-hidden="true"></i></span>
				</div>
				<div class="mensaje-header-container">
					<h3 class="mensaje-header"> @lang("Dedicación total") </h3>
                </div>
                <p class="size-xl text-center"> @lang("Mi dedicación a tu idea o proyecto será total y estaremos comunicados desde el primer día hasta que finalice. If you don't speak spanish we can communicate in written English (switch please to English version above).") </p>
            </div>
        </div>		
    </div>
	
</section>

<section id="jc-overview">
	<div class="container">
		<div class="row row-content justify-content-center">
			<div class="text-center">
				<img src="{{ asset('storage/images/JC.jpg') }}" alt="José Carlos Román Rubio" class="rounded-circle">
				<h1>José Carlos Román (JC) </h1>
				<h3>@lang("Ingeniero informático, programador freelance")</h3>
				<div>
				<a href="{{ route('about', [ Config::get('app.locale') == 'es' ? '': Config::get('app.locale'), __("routes.about")] ) }}" class="btn-jc btn-hero"> @lang("Más información") </a>
			</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="background">
	<div class="container">
		<div class="row section-title">
			<div class="col-12">
				<h2> @lang("Sobre mí") </h2> 
			</div>			
		</div> 
		<div class="row row-content">
			<div class="col-12">
				<p>{!! __("Me llamo <strong>José Carlos Román Rubio</strong> (profesionalmente soy conocido como JC) y soy de Málaga (España). Tengo más de 10 años de experiencia en programación y soy Ingeniero Ténico Informático por la Universidad de Málaga. En 2016 empecé mi carrera como freelancer. Concretamente soy programador y desarrollador freelance, desarrollando todo tipo de aplicaciones informáticas.") !!}</p>

				<p> @lang("A continuación, voy a compartir mis números como trabajador freelance:")<p>
				<ul>
					<li>@lang("He trabajado con más de 20 clientes (particulares y sobre todo empresas). La mayoría de ellos son españoles y más de la mitad han vuelto a contratar mis servicios.")</li>
					<li>@lang("He realizado más de 100 proyectos, todos facturados.")</li>
				</ul>
			</div>			
		</div>
		
		<div class="row row-content">
			<div class="col col-sm" align="center">
                <div class="number">
                    <div class="number-content">
                        10+ <span> @lang("años experiencia") </span>
                    </div>
                </div>
            </div>
			<div class="col col-sm" align="center">
                <div class="number">
                    <div class="number-content">
                        20+ <span> @lang("clientes") </span>
                    </div>
                </div>
            </div>
            <div class="col col-sm" align="center">
                <div class="number">
                    <div class="number-content">
                        100+ <span> @lang("Proyectos") </span>
                    </div>
                </div>
            </div>			
		</div>
	</div>
</section>


<section id="testimonials">
    
	<div class="container"> 
		<!--
		<div class="row row-header">
			<div class="col-12">				
				<h2 class="center"> @lang("Testimonios")</h2>
			</div>
		</div>	
        -->
		<div class="row row-content">
			<div class="col-12 pt-5">
				<div id="quotes-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">						
						<div class="carousel-item active">					   
							<div class="carousel-caption">
								<blockquote>
									<p class="mb-0"> He contratado a Jose Carlos para que hiciera unos arreglos en mi web y añadiera alguna página que necesitaba añadir y he quedado más que satisfecha: por la cantidad de conocimientos técnicos que se nota que tiene, porque contestaba a mis preguntas y dudas aclarándome a la perfección lo que podía estar pasando y eso me daba mucha tranquilidad y, sobre todo, por su altísima implicación, que se nota que controla y le gusta su trabajo y que se dedica a él un 120%, de hecho, me ha arreglado cosas que no sabíamos ni que fallaban de antemano. Me ha dado mucha confianza porque sabía que dejaba mi web a alguien que sabe y que la toca con tanto interés, casi como si fuera yo misma.</p>      
									<footer class="blockquote-footer">Ana González,
										<cite>Alea, centro de psicología humanista</cite>
									</footer>
								</blockquote>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-caption">
								<blockquote>
									<p class="mb-0"> JC es un brillante programador. Es responsable, apasionado de su trabajo, y tiene muy buen criterio a la hora de afrontar el diseño de cualquier proyecto, además de una gran capacidad para aprender nuevas tecnologías en poco tiempo.</p>      
									<footer class="blockquote-footer">Antonio Márquez Marín,
										<cite>Software engineer</cite>
									</footer>
								</blockquote>
							</div>
						</div>						
					</div>
					<a class="carousel-control-prev" href="#quotes-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#quotes-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div> 
</section>

<section id="must-know" class="background">
	
    <div class="container">
        <div class="row section-title">
			<div class="col-12">
				<h2>{!! __("¿Por qué contratar a un <span>freelancer</span>?") !!}</h2>
			</div>
		</div>
		
		<div class="row row-content">
			<div class="col-12">
				<p class="size-xl">@lang("El trabajador autónomo o freelancer es la solución ideal para particulares o empresas que tengan un proyecto y busquen a un profesional que pueda adaptarse a los horarios y requerimientos del mismo. Un freelancer está continuamente formándose ya que sus ingresos no son fijos y dependen del número de clientes que tengan; por esa razón el freelancer hará un estudio del trabajo y pondrá todos sus conocimientos a la disposición del cliente para sacarlo adelante. Además, contratando a un freelancer estás ayudando a personas emprendedoras que han decidido dedicarse a lo que les gusta.")</p>
        
			</div>
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