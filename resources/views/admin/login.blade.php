@extends('layouts.admin')

@section('content')
@include('includes/info-alert' )


<div class="item-box login center">

	<img src="{{ asset('images/jc-logo-150.png')}}"></img>

	<div class="item-box-content">
		<form method="post" action="{{route('admin.login')}}">
			<div class="form-group">
				<label for="usuario">Usuario: </label>
				<input type="text" name="name" id="usuario" class="form-control {{ $errors->has('name')? 'alert alert-danger':'' }}" value= "{{ old('name') }}"  >
			</div>
			<div class="form-group">
				<label for="password">Contraseña: </label>
				<input type="password" name="password" id="usuario" class="form-control {{ $errors->has('password')? 'alert alert-danger':'' }}" >
			</div>
			<input type='submit' class="btn-jc btn-theme" value="Entrar">
			<input type="hidden" name="_token" value="{{ Session::token() }}" >
		</form>
	</div>

</div>

@endsection
