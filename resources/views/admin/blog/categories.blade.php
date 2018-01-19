@extends('layouts.admin');

@section('content')

<section>
	<div class="container">
	         
		<form method="post" action="" class="form-inline">					
			<label for="category-name">Categoría:</label>
			<input type="text" class="form-control mx-sm-2" id="category-name">
			<button type="submit" class="btn btn-default btn-category mt-2 mt-sm-0">Añadir categoría</button>
		</form>
		
		
		<div class="row">
			<ul class="list-group">
				@foreach ($categories as $category)
				<li class="list-group-item">
					<div data-id="{{ $category->id }}">
						<h3> {{ $category->name }}</h3>			
						<div class="edit">
							<nav>
								<ul class="list-inline">
									<li class="list-inline-item category-edit"><input type="text"/></li>
									<li class="list-inline-item"> <a href="#" class="category-will-edit">Editar</a></li>
									@if (!$category->posts()->first())
										<li class="list-inline-item"><a href="#"><span class="text-danger category-will-delete">Eliminar</span></a></li>
									@endif
								</ul>
							</nav>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		
		@if ($categories->lastPage() > 1)
		<div class="row row-content justify-content-around">
			@if ($categories->currentPage() !==1)
				<div class="col col-sm-4 col-lg-2"><a href="{{$categories->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
			@endif
			@if ($categories->currentPage() !== $categories->lastPage())
				<div class="col col-sm-4 col-lg-2"><a href="{{$categories->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
			@endif
		</div>
		@endif
					
	</div>
</section>
@endsection