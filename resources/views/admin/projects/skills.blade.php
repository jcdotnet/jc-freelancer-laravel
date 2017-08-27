@extends('layouts.admin');

@section('content')

<section>
	<div class="container">
		<div class="row">           
			<form method="post" action="" class="form-inline">					
				<div class="form-group">
					<label for="skill-name">Tecnología:</label>
					<input type="text" class="form-control" id="skill-name">
				</div>
				<button type="submit" class="btn btn-default btn-skill">Añadir tecnología</button>
			</form>
		</div>
		
		<div class="row">
			<ul class="list-group">
				@foreach ($skills as $skill)
				<li class="list-group-item">
					<div data-id="{{ $skill->id }}">
						<h3> {{ $skill->name }}</h3>			
						<div class="edit">
							<ul class="list-inline">
								<li class="skill-edit"><input type="text"/></li>
								<li class="list-inline-item"> <a href="#">Editar</a></li>
								@if (!$skill->projects()->first())
									<li class="list-inline-item"><a href="#"><span class="text-danger">Eliminar</span></a></li>
								@endif
							</ul>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		
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