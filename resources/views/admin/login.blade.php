@extends('layouts.admin')

@section('content')
@include('includes/info-alert' )


<div class="login">

	<div class="card text-center">
		<div class="text-center mt-2">
			<img src="{{ asset('storage/images/jc-logo-150.png')}}" alt="Jose Carlos Román Rubio. Admin Area" width="150px">
		</div>
		<div class="card-body">
			<form method="post" action="{{route('admin.login')}}">
				<div class="form-group">
					<label for="usuario">Usuario: </label>
					<input type="text" name="name" id="usuario" class="form-control {{ $errors->has('name')? 'alert alert-danger':'' }}" value= "{{ old('name') }}"  >
				</div>
				<div class="form-group">
					<label for="password">Contraseña: </label>
					<input type="password" name="password" id="usuario" class="form-control {{ $errors->has('password')? 'alert alert-danger':'' }}" >
				</div>
				<input type='submit' class="btn btn-jc btn-success" value="Entrar">
				<input type="hidden" name="_token" value="{{ Session::token() }}" >
			</form>
		</div>
	</div>

</div>

@endsection
