@extends('layouts.admin')

@section('content')

@include('includes/info-alert')
<div class="container">
	<div class="row">
		<div class="col-12">
			<form method="post" action="{{ route('admin.project.post.update', ['project_id' => $project->id]) }}">
				<div class="form-group">
					<label for="nombre">Nombre:</label>
					<input type="text" name="nombre" id="nombre" class="form-control {{ $errors->has('nombre')? 'alert alert-danger':'' }}" 
						   value= "{{old('nombre')? old('nombre') : (isset($project) ? $project->nombre : '') }}"  >
				</div>
				<div class="form-group">
					<label for="name">Nombre (English):</label>
					<input type="text" name="name" id="name" class="form-control {{ $errors->has('name')? 'alert alert-danger':'' }}" 
						   value= "{{old('name')? old('name') : (isset($project) ? $project->name : '') }}"  >  
				</div>
				<div class="form-group">
					<label for="descripcion">Descripcion:</label>
					<textarea rows=4" name="descripcion" id="descripcion" class="form-control {{ $errors->has('descripcion')? 'alert alert-danger':''}}">{{ old('descripcion')? old('descripcion') : (isset($project) ? $project->descripcion : '') }} 
					</textarea>
				</div>
				<div class="form-group">
					<label for="description">Descripción (English):</label>
					<textarea rows=4" name="description" id="description" class="form-control {{ $errors->has('description')? 'alert alert-danger':''}}">{{ old('description')? old('description') : (isset($project) ? $project->description : '') }}  
					</textarea>
				</div>
				<div class="form-group">
					<div class="form-inline">
						<label for="skills-select">Tecnologías:</label>
						<select name="skills-select" id="skills-select" class="form-control">
							@foreach ($skills as $skill)
							<option value="{{$skill->id}}"> {{$skill->name}} </option>
							@endforeach
						</select>	
						<button type="button" class="form-control btn-info btn-skills">Añadir tecnología</button>
					</div>
					<div class="added-skills">
						<ul class="list-inline">
							@foreach ($project_skills as $project_skill)
							<li> <a href="#" data-id="{{$project_skill->id}}"> {{$project_skill->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<input type="hidden" name="skills" id="skills" value="{{ implode(',', $project_skills_ids) }}">
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="freelance" @if ($project->freelance) checked @endif> Proyecto freelance</label>
				</div>
				<div class="form-group">
					<label for="start">Fecha inicio:</label>
					<input type="text" name="start" id="start" class="form-control {{ $errors->has('start')? 'alert alert-danger':'' }}" 
						   placeholder="YYYY-MM-DD" value= "{{old('start')? old('start') : (isset($project) ? $project->start : '') }}"  >
				</div>
				<div class="form-group">
					<label for="end">Fecha fin (opcional):</label>
					<input type="text" name="end" class="form-control { $errors->has('end')? 'alert alert-danger':'' }}" id="end" 
						   placeholder="YYYY-MM-DD" value= "{{old('end')? old('end') : (isset($project) ? $project->end : '') }}"  >
				</div>
				<div class="form-group">
					<label for="url">URL (opcional):</label>
					<input type="text" name="url" class="form-control { $errors->has('url')? 'alert alert-danger':'' }}" id="url"
						   value= "{{old('url')? old('url') : (isset($project) ? $project->url : '') }}" >
				</div>
				<div class="form-group">
					<label for="client">Cliente (opcional):</label>
					<input type="text" name="client" class="form-control { $errors->has('client')? 'alert alert-danger':'' }}" id="client"
						   value= "{{old('client')? old('client') : (isset($project) ? $project->client : '') }}" >
				</div>
				<button type="submit" class="btn btn-success"> Enviar </button>

				<input type="hidden" name="_token" value="{{ Session::token() }}">
				<input type="hidden" name="project_id" value="{{ $project->id }}">

			</form>
		</div>
		<br>
	</div>
</div>
@endsection

