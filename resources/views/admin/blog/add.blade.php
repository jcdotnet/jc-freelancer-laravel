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
<div class="container">
	@include('includes/info-alert')
	<h2 class="row-header">Nuevo artículo</h2>
	<form method="post" action="{{ route('admin.post.add') }}">
		<div class="form-group">
			<label for="title">Título:</label>
			<input type="text" name="title" id="title" class="form-control {{ $errors->has('title')? 'alert alert-danger':'' }}" value= "{{ old('title') }}"  >
		</div>
		
		<div class="form-group">
			<div class="form-inline">
				<label for="skills-select">Categorías:</label>
				<select name="skills-select" id="skills-select" class="form-control mx-2">
					@foreach ($categories as $category)
						<option value="{{$category->id}}"> {{$category->name}} </option>
					@endforeach
				</select>	
				<button type="button" class="form-control btn-info btn-skills">Añadir Categoría</button>
			</div>
			<div class="added-skills">
				<ul class="list-inline"></ul>
			</div>
			<input type="hidden" name="skills" id="skills">
		</div>
	
		<div class="form-group">
			<label for="content">Contenido:</label>
			<textarea rows=7" name="content" id="content" class="form-control {{ $errors->has('content')? 'alert alert-danger':''}}"> {{ old('content') }} </textarea>
		</div>
		
		<div class="form-group">
			<label for="radio">Estado:</label>
			<div class="radio">
				<label><input type="radio" name="status" value="draft"> Borrador </label>
			</div>
			<div class="radio">
				<label><input type="radio" name="status" value="published"> Publicar </label>
			</div>
		</div>
		
		<button type="submit" class="btn btn-success"> Guardar </button>

		<input type="hidden" name="_token" value="{{ Session::token() }}">

	</form>
</div>

@endsection

