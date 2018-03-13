<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col mt-3">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						@foreach ($errors->all() as $error)
							<strong> {{ $error }} </strong> 
						@endforeach
					</div>
				@endif
				@if (Session::has('fail'))
					<div class="alert alert-danger">
						<strong> {{ Session::get('fail') }} </strong> 
					</div>
				@endif
				@if (Session::has('success'))
					<div class="alert alert-success">
						<strong> {{ Session::get('success') }} </strong> 
					</div>
				@endif
			</div>
		</div>
	</div>
</section>