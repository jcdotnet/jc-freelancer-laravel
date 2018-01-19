<header>
	<nav class="navbar navbar-expand-md fixed-top">
		<div class="container">
			<a  href="{{ route('admin') }}" class="navbar-brand" >ADMIN AREA</a>
			<button class="navbar-toggler jc-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-items" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="jc-toggler-icon">&nbsp;</span>
			</button>

			<div id="navbar-items" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{Request::is('admin') ? 'active':''}}"><a class="nav-link" href="{{ route('admin') }}"> DASHBOARD </a></li>				
					<li class="nav-item {{Request::is('admin/project*') || Request::is('admin/media*') ? 'active':''}}"><a class="nav-link" href="{{ route('admin.projects') }}"> PROYECTOS </a></li>
					<li class="nav-item {{Request::is('admin/post*') || Request::is('admin/categ*')? 'active':''}}"><a class="nav-link" href="{{ route('admin.posts')}}"> ARTÍCULOS </a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('admin.logout') }}"> logout</a></li>
				</ul>
			</div>
		</div>
	</nav> 
</header>

<div id="main-admin">