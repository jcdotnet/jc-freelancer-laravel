@extends ('layouts.default')

@section('head')
	<title>@lang("Java, Java EE & Spring | Jose Carlos Román Rubio")</title>
	<meta name="description" content="{{ __("Mi formación en Java, desde la Universidad de Málaga (Programación Orientada a Objetos, curso 1999-2000) hasta la actualidad.") }}"/>
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')
<section id="breadcrumb" class="first-section">
   <div class="container">    
        <div class="row">
			<div class="col">
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{ route('home', Config::get('app.locale') == 'es' ? '': Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">Java</span>
				</nav>
			</div>
		</div>
    </div>
</section>


<section id="java-lcc-uma">
   <div class="container">
	    <div class="row">
		    <div class="col mt-3 row-header">
		       <h1 class="center"> @lang("Programación Orientada a Objetos ")(Universidad de Málaga)</h1>
			</div>
	    </div>
        <div class="row row-content">           
            <div class="col-12 size-xl">
				<p>@lang("Recursos disponibles:")</p>
				<ul>
					<li><a href="{{route('java.apuntes', [Config::get('app.locale'), "java_2000_2001"]) }}" >@lang("Apuntes")</a></li>
					<li>@lang("Examen (Sobresaliente)")</li>
				</ul>				
	       </div>
			<div class="col-12">
				IDE: <strong>JCreator</strong>
			</div>
        </div>
    </div>
</section>

<hr>

<section id="java-forman">
    <div class="container">
		<div class="row">
		    <div class="col mt-3 row-header">
		       <h1 class="center"> @lang("Desarrollo de aplicaciones con J2EE ")(Forman, P.T.A. Málaga)</h1> 
			</div>
	    </div>		
        <div class="row row-content">           
            <div class="col-12 size-xl"> 
				<p>@lang("Recursos disponibles:")</p>
				<ul>
					<li><a href="{{route('j2ee.temario', [Config::get('app.locale'), "j2ee_temario"]) }}" >@lang("Temario")</a></li>
					<li><a href="{{route('j2ee.titulo', [Config::get('app.locale'), "j2ee_titulo"]) }}" >@lang("Diploma")</a></li>					
				</ul>
			</div>   
			<div class="col-12">
				IDE: <strong>Eclipse</strong>
			</div>
        </div>
     </div>
</section> 

<hr>

<section id="java-books">
    <div class="container">
		<div class="row">
		    <div class="col mt-3 row-header">
		       <h1 class="center"> @lang('Libros')</h1>
			</div>
			<div class="row row-content text-center text-lg-left">           
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
					<a href="https://www.amazon.com/Pro-Spring-Depth-Guide-Framework/dp/1484228073/" target="_blank" class="d-block mb-4 h-100">
					  <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/PRO_Spring_5.jpg') }}" alt="PRO Spring 5">
					</a>
				</div>
			</div>
        </div>
    </div>
</section> 

@endsection