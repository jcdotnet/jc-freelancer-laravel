@extends ('layouts.admin')

@section('content')
@include('includes/info-alert')
<section id="proyectos">  
	<div class="container">
	
        <div class="row row-content">
			@foreach ($projects as $p)
            <div class="col-md-6 col-lg-4">
				<div class="col-md-12 item-box">
					<div class="item-box-header">					
						<h3 class="center"> {{ $p->nombre }} </h3>
						<h4 class="center subtitle">  {{ date('m/Y', strtotime($p->start)) }} - {{ $p->end ? date('m/Y', strtotime($p->end)) : __('actualidad') }} </h4>
					</div>
					<div class="item-box-content">
						<p> {!! $p->descripcion !!}  </p>
						<div class="skills">
							<ul class="list-inline">
								@foreach ($p->skills as $skill)								
								<li><span class="label label-lg label-default" style="color:#fff"> {{ $skill->name }} </span></li>
								@endforeach
							</ul>
						</div>
						<div class="item-box-bottom center list-inline">
							<a href="{{ route('admin.project', ['project_slug' => $p->slug]) }}" class="btn-jc btn-theme"> Ver </a>
							<a href="{{ route('admin.project.update', ['project_id' => $p->id]) }}" class="btn-jc btn-theme"> Edit </a>
							<a href="{{ route('admin.project.media.add', ['project_id' => $p->id]) }}" class="btn-jc btn-theme"> Media</a>
							<a href="{{ route('admin.project.delete', ['project_id' => $p->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger"> Delete</a>  
						</div>
					</div>
				</div>
            </div>
			@endforeach
        </div>
		@if ($projects->lastPage() > 1)
		<div class="row">
			<nav aria-label="...">
				<ul class="pager">
					@if ($projects->currentPage() !==1)
						<li class="previous"><a href="{{$projects->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> Anteriores</a></li>
					@endif
					@if ($projects->currentPage() !== $projects->lastPage())
						<li class="next"><a href="{{$projects->nextPageUrl()}}">Siguientes <span aria-hidden="true">&rarr;</span></a></li>
					@endif
				</ul>
			</nav>
		</div>
        @endif
    </div>
</section>

@endsection