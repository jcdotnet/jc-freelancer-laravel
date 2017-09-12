<div id="cookie-consent">
    <div class="container">
       <div id="cookie-content" class="row">
		   <div class="col">
				@lang("Este sitio usa cookies. Si continúa navegando consideramos que acepta su uso. ") 
				<a href="{{route('cookies', Config::get('app.locale'))}}" target="_blank"> @lang("Más información.") </a> | 
				<a id="aceptar-cookies" onclick="aceptarCookies(event);"><b> @lang("De acuerdo.") </b></a> 
		   </div>
        </div>
    </div>
</div>
