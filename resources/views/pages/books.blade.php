@extends ('layouts.default')

@section('head')
	<title>@lang("Mis libros | Jose Carlos Román Rubio")</title>
	<meta name="description" content="{{ __("Mi estantería. Libros universitarios y de programación / desarrollo de Software con tecnologías Java, .NET, etc. ") }}"/>
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')
<section id="breadcrumb" class="first-section">
   <div class="container">    
        <div class="row">
			<div class="col">
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? '': Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">@lang("Mis libros")</span>
				</nav>
			</div>
		</div>
    </div>
</section>


<section id="jc-bookshelf">
    <div class="container">
		<div class="row">
		    <div class="col-12 mt-3 row-header">
		       <h1 class="center"> @lang('Mis libros')</h1>
			</div>
			<div class="row row-content text-center">           				
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="{{ asset('storage/images/arquitectura del PC.jpg') }}" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/arquitectura del PC.jpg') }}" alt="Arquitectura del PC">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.com/Java-Enterprise-Nutshell-Practical-OReilly/dp/0596101422/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/j2ee.jpg') }}" alt="Java Enterprise in a nutshell">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.com/Java-Complete-Reference-Tenth/dp/1259589331/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/java9.jpg') }}" alt="Java, The complete reference. Tenth Edition.">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.es/Logica-para-computacion-vol-i-logica-proposicional/dp/8481600016/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/lógica computación.jpg') }}" alt="Lógica para la computación">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="{{ asset('storage/images/Microsoft-.net-2.0.jpg') }}" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/Microsoft-.net-2.0.jpg') }}" alt="Microsoft .NET 2.0">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.com/Pro-NET-Core-Andrew-Troelsen/dp/1484230175" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/pro_c_sharp_7.jpg') }}" alt="PRO C#7 with .NET and .NET core">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.com/Pro-Spring-Depth-Guide-Framework/dp/1484228073/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/PRO_Spring_5.jpg') }}" alt="PRO Spring 5">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="{{ asset('storage/images/redes.jpg') }}" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/redes.jpg') }}" alt="Redes, Tanenbaum">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="http://www.lcc.uma.es/~av/Libro/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/tecnicas diseño de algs.jpg') }}" alt="Técnicas de diseño de algoritmos">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.com/WPF-4-5-Unleashed-Adam-Nathan/dp/0672336979/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/WPF 4.5 unleashed.jpg') }}" alt="WPF 4.5 unleashed">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="https://www.amazon.es/Professional-WordPress-Development-Brad-Williams-ebook/dp/B00RZDEKVA/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/WP design and dev.jpg') }}" alt="WordPress design and development">
					</a>
				</div>				
			</div>
        </div>
    </div>
</section> 
@endsection