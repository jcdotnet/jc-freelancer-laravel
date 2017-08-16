@extends ('layouts.default')

@section('title')
	<title> @lang("Formulario de contacto | Jose Carlos Román Rubio")</title>
@endsection

@section('content')

<section id="breadscrumb">
   <div class="container">    
        <div class="row breadscrumb-container">
            <div>
                <ul class="breadcrumb">
                    <li><a href='{{ route('home') }}'> @lang("Inicio") </a></li>
                    <li class="active"> @lang("Formulario de contacto")</li>
               </ul>
            </div>
        </div>
    </div>
</section>

@include('includes/info-alert')

<div class="container row-header">
	<h2>@lang("Formulario de contacto")</h2>
</div>
 
<div class="container row-content"> 
    <div>    
		<form action='{{ url('/contacto') }}' method='post'>
		  <div class="form-group">
			<label for="nombre"> @lang("Nombre") </label>
			<input type="text" class="form-control form-control-jc {{ $errors->has('nombre')? 'alert alert-danger':'' }}" value= "{{ old('nombre') }}" 
				   id="nombre" name="nombre">
		  </div>

		  <div class="form-group">
			<label for="email"> @lang("Correo electrónico") </label>
			<input type="texto" class="form-control form-control-jc {{ $errors->has('email')? 'alert alert-danger':'' }}" value= "{{ old('email') }}" 
				   id="email"
				   name='email'>
		  </div>    

		  <div class="form-group">
			<label for="asunto"> @lang("Asunto") </label>
			<select class="form-control form-control-jc {{ $errors->has('asunto')? 'alert alert-danger':'' }}" value= "{{ old('asunto') }}" 
					id="asunto"
					name="asunto">
				@foreach ($asuntos as $asunto)
					<option value="{{ $asunto }}"> {{ $asunto }} </option>
				@endforeach
			</select>
		  </div>

		  <div class="form-group">
			<label for="mensaje"> @lang("Mensaje") </label>
			<textarea class="form-control {{ $errors->has('cuerpo')? 'alert alert-danger':'' }}" id="mensaje"
					  rows="10" name='cuerpo'>{{ old('cuerpo') }}</textarea>
		  </div>

		  <div class="form-group">
			  <input type="checkbox" name="politica-privacidad" class="{{ $errors->has('acceptance')? 'alert alert-danger':'' }}">
			   @lang("He leído y acepto ") <a href='{{ route('privacy') }}' target="_blank"> @lang("la política de privacidad") </a>  
		  </div>

		  <button type="submit" class="btn btn-success"> @lang("Enviar")  </button>

		  <input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
  </div>
	 
</div>
@endsection