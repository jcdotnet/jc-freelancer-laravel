@extends('layouts.admin')

@section('head')
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey={{ env('TINYMCE_KEY') }}"></script>
	<script>
		tinymce.init({ 
			selector: 'textarea',
			branding: false,
			plugins: 'lists link code image textcolor emoticons',
		    menubar: false,
			toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify |  | bullist numlist outdent indent | link image | forecolor backcolor emoticons | code',
			relative_urls: false,
			file_browser_callback : function(field_name, url, type, win) {
				var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
				var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

				var cmsURL = '/freelancer-laravel/public/media?field_name=' + field_name; // dev
				//var cmsURL = '/media?field_name=' + field_name; // prod
				if (type == 'image') {
					cmsURL = cmsURL + "&type=Images";
				} else {
					cmsURL = cmsURL + "&type=Files";
				}

				tinyMCE.activeEditor.windowManager.open({
					file : cmsURL,
					title : 'Filemanager',
					width : x * 0.8,
					height : y * 0.8,
					resizable : "yes",
					close_previous : "no"
				});
			}
		});
	</script>
@endsection

@section('content')
@include('includes/info-alert')
<div class="container">
	<h2 class="row-header">Nuevo proyecto</h2>
	<form method="post" action="{{ route('admin.project.add') }}">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre" class="form-control {{ $errors->has('nombre')? 'alert alert-danger':'' }}" value= "{{ old('nombre') }}"  >
		</div>
		<div class="form-group">
			<label for="name">Nombre (English):</label>
			<input type="text" name="name" id="name" class="form-control {{ $errors->has('name')? 'alert alert-danger':'' }}" value= "{{ old('name') }}"  >
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion:</label>
			<textarea rows=3" name="descripcion" id="descripcion" class="form-control {{ $errors->has('descripcion')? 'alert alert-danger':''}}"> {{ old('descripcion') }} </textarea>
		</div>
		<div class="form-group">
			<label for="description">Descripción (English):</label>
			<textarea rows=3" name="description" id="description" class="form-control {{ $errors->has('description')? 'alert alert-danger':''}}"> {{ old('description') }} </textarea>
		</div>
		<div class="form-group">
			<div class="form-inline">
			<label for="skills-select">Tecnologías:</label>
			<select name="skills-select" id="skills-select" class="form-control mx-2">
				@foreach ($skills as $skill)
					<option value="{{$skill->id}}"> {{$skill->name}} </option>
				@endforeach
			</select>	
			<button type="button" class="form-control btn-info btn-skills">Añadir tecnología</button>
			</div>
			<div class="added-skills">
				<ul class="list-inline"></ul>
			</div>
			<input type="hidden" name="skills" id="skills">
		</div>
		<div class="checkbox">
			<label><input type="checkbox" name="freelance"> Proyecto freelance</label>
		</div>
		<div class="form-group">
			<label for="start">Fecha inicio:</label>
			<input type="text" name="start" id="start" class="form-control {{ $errors->has('start')? 'alert alert-danger':'' }}" 
				   placeholder="YYYY-MM-DD" value= "{{old('start') }}"  >
		</div>
		<div class="form-group">
			<label for="end">Fecha fin (opcional):</label>
			<input type="text" name="end" class="form-control { $errors->has('end')? 'alert alert-danger':'' }}" id="end" 
				   placeholder="YYYY-MM-DD" value= "{{old('end') }}"  >
		</div>
		<div class="form-group">
			<label for="url">URL (opcional):</label>
			<input type="text" name="url" class="form-control { $errors->has('url')? 'alert alert-danger':'' }}" id="client" value= "{{old('url') }}" >
		</div>
		<div class="form-group">
			<label for="client">Cliente (opcional):</label>
			<input type="text" name="client" class="form-control { $errors->has('client')? 'alert alert-danger':'' }}" id="client" value= "{{old('client') }}" >
		</div>
		<button type="submit" class="btn btn-success"> Enviar </button>

		<input type="hidden" name="_token" value="{{ Session::token() }}">

	</form>
</div>

@endsection

