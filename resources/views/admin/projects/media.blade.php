@extends('layouts.admin')

@section('content')

@include('includes/info-alert')
<div class="container">	
	<form method="post" action="{{ route('admin.project.media', ['project_id' => $project->id]) }}">
		<p> Imágenes para el proyecto <strong>{{ $project->nombre }}</strong>:  </p>
		<div class="row row-content">
        @foreach ($images as $image)
			<div class="col-md-3">
				<div>
					<a href="{{asset('storage/images/'.$image->path)}}">
						<img src="{{asset('storage/images/'.$image->path)}}" alt="{{$image->description}}" style="width:100%">
					</a>
					<div class="caption">
					<h3>{{$image->description}}</h3>
					<div class="form-group">
							<input type="checkbox" class="image" 
								   @foreach ($project->images as $project_image) @if ($image->id === $project_image->id) checked @endif @endforeach value = "{{$image->id}}">
							 Seleccionar
					</div>
					</div>
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
		
		<div class="row">
		<input type="hidden" name="project_images" id="images" value="{{ implode(',', $project_images_ids) }}">
		<button type="submit" class="btn btn-success">Asignar imágenes</button>			
		{{ csrf_field() }}
		</div>
	</form>
	</div>
</div>

@endsection 

