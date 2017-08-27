@extends('layouts.admin')

@section('content')

@include('includes/info-alert')
	

<div class="container">
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

<div class="container">	
	<div class="row">
		@foreach ($media as $image)
		<div class="col-md-3">
			<div class="figure">
				<a href="{{asset('storage/'.$image->path)}}">
					<img src="{{asset('storage/'.$image->path)}}" class="figure-img img-fluid img-thumbnail" alt="{{$image->description}}">
				</a>
				<figcaption class="figure-caption text-center">
					<h4>{{$image->description}}</h4>
					<a href="{{ route('admin.media.delete', ['image_id' => $image->id]) }}" class="btn btn-xs btn-danger @if ($image->projects()->first()) disabled @endif"> Eliminar </a>
				</figcaption>
			</div>
		</div>
		@endforeach
	</div>	
	
	@if ($media->lastPage() > 1)
	<div class="row row-content justify-content-around">
			@if ($media->currentPage() !==1)
				<div class="col col-sm-4 col-lg-2"><a href="{{$media->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
			@endif
			@if ($media->currentPage() !== $media->lastPage())
				<div class="col col-sm-4 col-lg-2"><a href="{{$media->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
			@endif
	</div>
    @endif
		
</div>

@endsection 