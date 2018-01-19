@extends ('layouts.admin')

@section('content')
<section id="proyectos">  
	<div class="container">
		@include('includes/info-alert')
        <div class="row row-content">
			<div class="card-deck">
				@foreach ($posts as $p)
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">{{ $p->title }} @if ($p->status == "published") <span class="badge badge-success float-right">Publicado</span>@endif</h5>
						<p class="card-text">{{ $p->getContentExcerpt(20) }}</p>
						<p class="card-text">
							<small class="text-muted">
								Author: <strong>{{$p->author}}</strong>. Categorías:
								<strong>
								@foreach ($p->categories as $category)								
									{{ $category->name }} &nbsp;
								@endforeach
								</strong>
							</small>
							<br>
							<small class="text-muted">Modificado: <strong>{{$p->updated_at}}</strong></small>
						</p>
						<div class="text-center list-inline">
							<a href="{{ route('admin.post', ['post_slug' => $p->slug, 'is_admin' => '1']) }}" class="btn-jc btn-theme"> Ver </a>
							<a href="{{ route('admin.posts.update', ['post_id' => $p->id]) }}" class="btn-jc btn-theme"> Edit </a>
							<a href="{{ route('admin.post.delete', ['post_id' => $p->id]) }}" onclick="return confirm('Are you sure?')" class="btn-jc btn-theme" style="background:red"> Delete</a>  
						</div>
				  </div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
           
						
		
	@if ($posts->lastPage() > 1)
	<div class="row row-content justify-content-around">
		@if ($posts->currentPage() !==1)
			<div class="col col-sm-4 col-lg-2"><a href="{{$posts->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
		@endif
		@if ($posts->currentPage() !== $posts->lastPage())
			<div class="col col-sm-4 col-lg-2"><a href="{{$posts->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
		@endif
	</div>
	@endif
</section>

@endsection