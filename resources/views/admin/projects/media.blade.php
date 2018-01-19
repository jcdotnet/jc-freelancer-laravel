@extends('layouts.admin')

@section('content')

@include('includes/info-alert')
<div class="container">
	<div class="row row-content">
		<h4>Seleccione imágenes para el proyecto <strong>{{ $project->nombre }}</strong></h4>
	</div>
	<form method="post" action="{{ route('admin.project.media', ['project_id' => $project->id]) }}">
		<div class="row row-content">
        @foreach ($images as $image)
			<div class="col-md-3">
				<div class="form-group">
					<a href="{{asset('storage/images/'.$image->path)}}">
						<img src="{{asset('storage/images/'.$image->path)}}" alt="{{$image->description}}" style="width:100%">
					</a>
		
					<h4>{{$image->description}}</h4>

					<input type="checkbox" class="image" @foreach ($project->images as $project_image) @if ($image->id === $project_image->id) checked @endif @endforeach value = "{{$image->id}}">
					 Seleccionar
					<a href="{{ route('admin.media.delete', ['image_id' => $image->id]) }}" class="btn btn-xs btn-danger @if ($image->projects()->first()) disabled @endif" style="color: #FFF"> Eliminar </a>				
				</div>
			</div>					
        @endforeach
		</div>
		
		@if ($images->lastPage() > 1)
		<div class="row row-content justify-content-around">
			@if ($images->currentPage() !==1)
				<div class="col col-sm-4 col-lg-2"><a href="{{$images->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
			@endif
			@if ($images->currentPage() !== $images->lastPage())
				<div class="col col-sm-4 col-lg-2"><a href="{{$images->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
			@endif
		</div>
		@endif
		
		<div class="row row-content">
		<input type="hidden" name="project_images" id="images" value="{{ implode(',', $project_images_ids) }}">
		<button type="submit" class="btn btn-success">Asignar imágenes</button>			
		{{ csrf_field() }}
		</div>
	</form>
	
	<div class="row row-content">
		<h3>O suba nuevas imágenes para seleccionarlas</h3>
	</div>	
	<div class="row row-content">
		<form method="post" action="{{ route('admin.media') }}" enctype="multipart/form-data">
		<div class="form-group">		
			<label for="image">Imagen: </label>
			<input type="file" name="path" class="form-control" id="image" />
		</div>
			<div class="form-group">	
			<label for="desc">Descripción: </label>
			<input type="text" name="descripcion" id="desc"class="form-control"  value= "{{ old('descripcion') }}"/>
			</div>
			<button type="submit" class="btn btn-success">Subir</button>	
			{{ csrf_field() }}
		</form>
	</div>
	</div>
</div>

@endsection 

