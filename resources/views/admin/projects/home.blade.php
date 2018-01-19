@extends ('layouts.admin')

@section('content')
@include('includes/info-alert')
<section id="proyectos">  
	<div class="container">
	
        <div class="row row-content">
			@foreach ($projects as $p)
            <div class="col-md-6 col-lg-4 d-flex">
				<div class="card mb-3 pb-5">
					<div class="card-body">					
						<h4 class="card-title"> {{ $p->nombre }} </h4>
						<h6 class="card-subtitle mb-2 text-muted">  {{ date('m/Y', strtotime($p->start)) }} - {{ $p->end ? date('m/Y', strtotime($p->end)) : __('actualidad') }} </h6>					
						<p class="card-text"> {!! $p->descripcion !!}  </p>
						<div class="card-text text-center mb-2">
							<div class="list-inline">
								@foreach ($p->skills as $skill)								
								<span class="badge badge-default" style="color:#fff"> {{ $skill->name }} </span>
								@endforeach
							</div>
						</div>
						<div class="text-center list-inline">
							<a href="{{ route('admin.project', ['project_slug' => $p->slug]) }}" class="btn-jc btn-theme"> Ver </a>
							<a href="{{ route('admin.projects.update', ['project_id' => $p->id]) }}" class="btn-jc btn-theme"> Edit </a>
							<a href="{{ route('admin.project.media.add', ['project_id' => $p->id]) }}" class="btn-jc btn-theme"> Media</a>
							<a href="{{ route('admin.project.delete', ['project_id' => $p->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger"> Delete</a>  
						</div>
                   </div>
				</div>
            </div>
			@endforeach
        </div>
		
		@if ($projects->lastPage() > 1)
		<div class="row row-content justify-content-around">
			@if ($projects->currentPage() !==1)
				<div class="col col-sm-4 col-lg-2"><a href="{{$projects->previousPageUrl()}}" class="btn-jc btn-theme-inverse">&larr; @lang("Anteriores")</a></div>
			@endif
			@if ($projects->currentPage() !== $projects->lastPage())
				<div class="col col-sm-4 col-lg-2"><a href="{{$projects->nextPageUrl()}}" class="btn-jc btn-theme-inverse">@lang("Siguientes") &rarr;</a></div>
			@endif
		</div>
        @endif
		
    </div>
</section>

@endsection