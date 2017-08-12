@extends('layouts.admin')

@section('content')

@include('includes/info-alert')
<div class="container">	
	<form method="post" action="{{ route('admin.project.media', ['project_id' => $project->id]) }}">
		<p> Imágenes para el proyecto <strong>{{ $project->nombre }}</strong>:  </p>
		<div class="row row-content">
        @foreach ($images as $image)
			<div class="col-md-3">
				<div class="thumbnail image-thumbnail">
					<a href="{{asset('storage/'.$image->path)}}">
						<img src="{{asset('storage/'.$image->path)}}" alt="{{$image->description}}" style="width:100%">
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
		<div class="row">
			@if ($images->lastPage() > 1)
			<div class="row">
				<nav aria-label="...">
					<ul class="pager">
						@if ($images->currentPage() !== 1 )
							<li class="previous"><a href="{{$images->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> Anteriores</a></li>
						@endif
						@if ($images->currentPage() !== $images->lastPage())
							<li class="next"><a href="{{$images->nextPageUrl()}}">Siguientes <span aria-hidden="true">&rarr;</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
			@endif
		</div>
		<div class="row">
		<input type="hidden" name="project_images" id="images" value="{{ implode(',', $project_images_ids) }}">
		<button type="submit" class="btn btn-success">Asignar imágenes</button>			
		{{ csrf_field() }}
		</div>
	</form>
	</div>
</div>

@endsection 

