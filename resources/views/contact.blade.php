@extends ('layouts.default')

@section('head')
	<title> @lang("Formulario de contacto | Jose Carlos Román Rubio")</title>
@endsection

@section('content')

<section id="breadscrumb" class="first-section">
   <div class="container">    
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href='{{ route('home', Config::get('app.locale')) }}'> @lang("Inicio") </a>
                    <span class="breadcrumb-item active"> @lang("Formulario de contacto")</span>
               </nav>
            </div>
        </div>
    </div>
</section>


@include('includes/info-alert')

<div class="container"> 
	<div class="row">
		 <div class="col row-header">
			<h2>@lang("Formulario de contacto")</h2>
		 </div>
	</div>
</div>
 
<div class="container">
	<div class="row-content">
		<div class="col col-md-9">    
			<form action="{{url('es/contactform')}}" method='post'>
				<div class="form-group row">
					<label for="nombre" class="col-md-3 col-form-label"> @lang("Nombre") </label>
					<div class="col-md-9">
						<input type="text" class="form-control {{ $errors->has('nombre')? 'alert alert-danger':'' }}" value= "{{ old('nombre') }}" 
						   id="nombre" name="nombre">
					</div>
			    </div>

			    <div class="form-group row">
					<label for="email" class="col-md-3 col-form-label"> @lang("Correo electrónico") </label>
					<div class="col-md-9">
						<input type="texto" class="form-control {{ $errors->has('email')? 'alert alert-danger':'' }}" value= "{{ old('email') }}" 
							id="email" name='email'>
				    </div>
			    </div>    

				<div class="form-group row">
					<label for="asunto" class="col-md-3 col-form-label"> @lang("Asunto") </label>
					<div class="col-md">
						<select class="form-control {{ $errors->has('asunto')? 'alert alert-danger':'' }}" value= "{{ old('asunto') }}" 
							id="asunto" name="asunto">
							@foreach ($asuntos as $asunto)
								<option value="{{ $asunto }}"> {{ $asunto }} </option>
							@endforeach
						</select>
					</div>
			    </div>

			    <div class="form-group row">
					<label for="mensaje" class="col-md-3 col-form-label"> @lang("Mensaje") </label>
					<div class="col-md">
						<textarea class="form-control {{ $errors->has('cuerpo')? 'alert alert-danger':'' }}" id="mensaje"
							  rows="14" name='cuerpo'>{{ old('cuerpo') }}</textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col offset-md-3">
						<input type="checkbox" name="politica-privacidad" class="{{ $errors->has('acceptance')? 'alert alert-danger':'' }}">
						@lang("He leído y acepto ") <a href='{{ route('privacy', Config::get('app.locale')) }}' target="_blank"> @lang("la política de privacidad") </a>  
					</div>
				    
				</div>

				<div class="form-group row">
					<div class="col offset-md-3">
						<button type="submit" class="btn btn-success"> @lang("Enviar")  </button>
					</div>
				</div>
				
			    <input type="hidden" name="_token" value="{{ Session::token() }}">
				
			</form>
		</div>
	</div>
</div>

@endsection