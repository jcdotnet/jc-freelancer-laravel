@extends('layouts.admin');

@section('content')

<section id="info-box" class="first-section">

</section>

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
			<div class="item-box item-box-content">
				<ul class="list-group">
					@foreach ($skills as $skill)
					<li class="list-group-item">
						<div data-id="{{ $skill->id }}">
							<h3> {{ $skill->name }}</h3>			
							<div class="edit">
								<ul class="list-inline">
									<li class="skill-edit"><input type="text"/></li>
									<li><a href="#">Editar</a></li>
									@if (!$skill->projects()->first())
										<li><a href="#"><span class="text-danger">Eliminar</span></a></li>
									@endif
								</ul>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		
		<div class="row">
			@if ($skills->lastPage() > 1)
			<div class="row">
				<nav aria-label="...">
					<ul class="pager">
						@if ($skills->currentPage() !== 1 )
							<li class="previous"><a href="{{$skills->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> Anteriores</a></li>
						@endif
						@if ($skills->currentPage() !== $skills->lastPage())
							<li class="next"><a href="{{$skills->nextPageUrl()}}">Siguientes <span aria-hidden="true">&rarr;</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
			@endif
		</div>
					
	</div>
</section>
@endsection