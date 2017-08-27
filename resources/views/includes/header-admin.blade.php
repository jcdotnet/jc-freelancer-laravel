<header>
	<nav class="navbar navbar-toggleable-sm fixed-top">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-items" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<a  href="{{ route('admin') }}" class="navbar-brand" >ADMIN AREA</a>

			<div id="navbar-items" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{Request::is('admin') ? 'active':''}}"><a class="nav-link" href="{{ route('admin') }}"> DASHBOARD </a></li>				
					<li class="nav-item {{Request::is('admin/media*') ? 'active':''}}"><a class="nav-link" href="{{ route('admin.media.add')}}"> MEDIA</a></li>
					<li class="nav-item {{Request::is('admin/projects*') ? 'active':''}}"><a class="nav-link" href="{{ route('admin.projects') }}"> PROYECTOS </a></li>
					<li class="nav-item {{Request::is('admin/blog*') ? 'active':''}}"><a class="nav-link" href="{{ route('admin.blog')}}"> BLOG </a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('admin.logout') }}"> logout</a></li>
				</ul>
			</div>
		</div>
	</nav> 
</header>

<div id="main-admin">