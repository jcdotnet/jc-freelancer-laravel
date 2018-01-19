@extends('layouts.admin');

@section('content')

<section>
	<div class="container">
		
		<form method="post" action="" class="form-inline">					
			<label for="skill-name">Tecnología:</label>
			<input type="text" class="form-control mx-sm-2" id="skill-name">
			<button type="submit" class="btn btn-default btn-skill mt-2 mt-sm-0">Añadir tecnología</button>
		</form>
		
		<ul class="list-group">
			@foreach ($skills as $skill)
			<li class="list-group-item">
				<div data-id="{{ $skill->id }}">
					<h3> {{ $skill->name }}</h3>			
					<div class="edit">
						<nav>
							<ul class="list-inline">
								<li class="list-inline-item skill-edit"><input type="text"/></li>
								<li class="list-inline-item"> <a href="#">Editar</a></li>
								@if (!$skill->projects()->first())
									<li class="list-inline-item"><a href="#"><span class="text-danger">Eliminar</span></a></li>
								@endif
							</ul>
						</nav>
					</div>
				</div>
			</li>
			@endforeach
		</ul>

		
		@if ($skills->lastPage() > 1)
		<div class="row row-content justify-content-around">
			@if ($skills->currentPage() !==1)
				<div class="col col-sm-4 col-lg-2"><a href="{{$skills->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
			@endif
			@if ($skills->currentPage() !== $skills->lastPage())
				<div class="col col-sm-4 col-lg-2"><a href="{{$skills->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
			@endif
		</div>
		@endif
					
	</div>
</section>
@endsection