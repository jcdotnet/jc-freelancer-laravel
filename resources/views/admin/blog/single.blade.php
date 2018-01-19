@extends('layouts.admin')

@section('content')

<div class="container">
	
	<div class="row">
		<div class="col row-header">
			<h1> {{$post->title}} </h1>
		</div>
	</div>
	
	<div class="row post-metadata">
		<div class="col post-metadata text-center">
			<ul class="list-inline">
				@foreach ($post->categories as $skill)								
					<li class="list-inline-item"><span class="badge badge-secondary"> {{ $skill->name }} </span></li>
				@endforeach
			</ul>					
		</div>
	</div>
	
	<div class="row row-content">
		<div class="col">
			{!! $post->content !!}
		</div>
	</div>

	<div class="row row-content">
		<div class="col text-center">
			<a href="{{ route('admin.posts') }}" class="btn-jc btn-theme"> Volver </a>
		</div>
	</div>
</div>
@endsection