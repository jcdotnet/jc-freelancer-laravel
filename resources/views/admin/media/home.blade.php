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
			<div class="thumbnail image-thumbnail">
				<a href="{{asset('storage/'.$image->path)}}">
					<img src="{{asset('storage/'.$image->path)}}" alt="{{$image->description}}"></a>
        <div class="caption center">
          <h3>{{$image->description}}</h3>
		  <a href="{{ route('admin.media.delete', ['image_id' => $image->id]) }}" class="btn btn-xs btn-danger @if ($image->projects()->first()) disabled @endif"> Eliminar </a>
        </div>
      </a>
    </div>
  </div>
		@endforeach
	</div>	
	
	
	<div class="row">
			@if ($media->lastPage() > 1)
			<div class="row">
				<nav aria-label="...">
					<ul class="pager">
						@if ($media->currentPage() !== 1 )
							<li class="previous"><a href="{{$media->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> Anteriores</a></li>
						@endif
						@if ($media->currentPage() !== $media->lastPage())
							<li class="next"><a href="{{$media->nextPageUrl()}}">Siguientes <span aria-hidden="true">&rarr;</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
			@endif
		</div>
</div>

@endsection 