<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div id="navbar-container" class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<div id="navbar-hamburger">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<div id="navbar-close" class="hidden">
						<span class="glyphicon glyphicon-remove"></span>
					</div>
				</button>
				<a  href="{{ route('admin') }}" class="navbar-brand" >ADMIN AREA</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="{{Request::is('admin') ? 'active':''}}"><a href="{{ route('admin') }}"> DASHBOARD </a></li>				
					<li class="{{Request::is('admin/media*') ? 'active':''}}"><a href="{{ route('admin.media.add')}}"> MEDIA</a></li>
					<li class="{{Request::is('admin/projects*') ? 'active':''}}"><a href="{{ route('admin.projects') }}"> PROYECTOS </a></li>
					<li class="{{Request::is('admin/blog*') ? 'active':''}}"><a href="{{ route('admin.blog')}}"> BLOG </a></li>
					<li><a href="{{ route('admin.logout') }}"> logout</a></li>
				</ul>
			</div>
		</div>
	</nav> 
</header>
	
<div id="main-admin">