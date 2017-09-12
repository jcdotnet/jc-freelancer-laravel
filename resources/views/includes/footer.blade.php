    <footer id="footer" class="row-footer">

		<div class="container">
			<div class="row row-content justify-content-center">
				<div class="col-auto size-l">
					<a class="list-inline-item" href="{{ route ('privacy', Config::get('app.locale'))}}">@lang('Política de privacidad')</a> | 
					<a class="list-inline-item" href="{{ route ('cookies', Config::get('app.locale'))}}">@lang('Cookies')</a>					
				</div>
			</div>
			<div class="row row-content justify-content-center">
				<div class="col-auto col-sm-auto">    
					<div class="list-inline">
						<a class="list-inline-item btn btn-social-icon btn-google-plus" href="https://plus.google.com/u/0/109018212858892270524" target="_blank"><i class="fa fa-google-plus"></i></a>
						<a class="list-inline-item btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/romanrubio" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a class="list-inline-item btn btn-social-icon btn-twitter" href="https://twitter.com/jc2net" target="_blank"><i class="fa fa-twitter"></i></a>
						<a class="list-inline-item btn btn-social-icon btn-youtube" href="https://www.youtube.com/channel/UC9wKRs6Mgf2wR2qfjYM0-uQ" target="_blank"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
      
		
		<div class="row">
			<div class="col text-center">
				<p>2016-{{date("Y")}} Jose Carlos Román Rubio</p>
			</div>
		</div>
		</div>

	</footer>
</div> <!-- main -->