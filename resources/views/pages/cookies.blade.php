@extends ('layouts.default')

@section('head')
	<meta name="robots" content="noindex, follow">
	<link rel="stylesheet" href="{{ asset('css/bundle.css') }}"  />
@endsection

@section('content')

<section id="page-title" class="title-standard first-section">
   <div class="container">  
        <div class="row align-items-center text-center">
			<div class="col-12 title-content">
				<h1>Política de cookies</h1>				
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'))}}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">Cookies</span>
				</nav>
			</div>
		</div>
    </div>
</section>
	

<section>
    <div class="container">
        <div class="row row-content mt-4">
			<div class="col">
				<p>En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio Electrónico le informamos de la utilización de cookies en las webs 
					y aplicaciones de "José Carlos Román Rubio" (JC en adelante), con el fin de facilitar y mejorar la navegación a los usuarios, 
					recordando por donde navegó en el sitio web, las preferencias y configuraciones de visualización, y ofreciendo a cada usuario información que puede ser de su interés.</p>

				<h3 class="text-center"> ¿Qué son las cookies? </h3>       
				<p> Una cookie es un fichero que se descarga en su ordenador o el dispositivo que utilice 
				(Smartphone, tableta, televisión conectada….) al acceder a determinadas páginas web o aplicaciones. 
				Las cookies permiten, entre otras cosas, recopilar información estadística, facilitar ciertas funcionalidades técnicas, 
				almacenar y recuperar información sobre los hábitos de navegación o preferencias de un usuario o de su equipo y, 
				dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer 
				al usuario. Una cookie se almacena en un ordenador con el fin de identificar al navegador mientras interacciona con 
				nuestras webs o aplicaciones. Un sitio web puede establecer una cookie en el navegador si las preferencias de éste 
				lo permiten. Un navegador sólo permite que un sitio web acceda a las cookies que éste establece, no a las que establecen 
				otros sitios Web.  </p>

				<h3 class="text-center"> ¿Por qué son importantes las cookies? </h3> 
				<p>JC utiliza estas cookies por motivos operativos (por ejemplo, cookies de sesión), y por facilidad de uso, 
				para hacer más fácil y amigable la navegación en la web, por ejemplo, recordar aspectos del usuario como su 
				idioma, país, navegador, etc... Determinadas cookies son fundamentales para que pueda utilizar nuestros servicios.
				</p>
				
				<h3 class="text-center">Tipos de cookies </h3>
				<p><em>Cookies Técnicas:</em> para ayudar a mejorar la calidad de nuestro servicio, incluyendo almacenar preferencias del usuario, los resultados de búsqueda, así como rastrear tendencias de usuario.</p>

				<p><em>Cookies estadísticas:</em> recogen información sobre fecha de visita, la URL y el título de la página web visitada. Los informes generados con esta información serán meramente estadísticos dando información sobre el comportamiento de navegación de forma anónima.</p>

				<p><em>Cookies de sesión:</em> guardan información del tipo de usuario, guardando el nick de usuario para evitar introducirlo página a página, también se guarda información encriptada e información sobre los favoritos del usuario.</p>

				<p><em>Cookies Analíticas:</em> son utilizadas para realizar el seguimiento sobre el motor de búsqueda desde el que se ha visitado la web y qué términos de búsqueda se utilizaron para encontrarlo, calculan el tiempo pasado en la web en cada sesión y el número de veces que el usuario ha visitado la página.</p>

				<h3 class="text-center">Cookies usadas en esta Web </h3>
				<p> Cookies propias: </p>
				<table border="1" cellspacing="0" cellpadding="8">
					<thead>
						<tr>
						<th>Cookie</th>
						<th>Nombre</th>
						<th>Prop&oacute;sito</th>
						<th>Expiraci&oacute;n</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>Técnica</td>
						<td>complianceCookie, cookie_notice_accepted (en https://josecarlosroman.com/wordpress)</td>
						<td>Cookies que almacenan si el usuario ha aceptado el uso de cookies. Su finalidad es cumplir con la ley de cookies.</td>
						<td>Sesi&oacute;n</td>
						</tr>
						<tr>
						<td>Técnica</td>
						<td>wordfence_verifiedHuman (en https://josecarlosroman.com/wordpress)</td>
						<td>cookie usada por el plugin WordFence de WordPress. Su finalidad es ofrecer seguridad a la página Web.</td>
						<td>1 día</td>
						</tr>
						<tr>
						<td>Técnica</td>
						<td>laravel_session</td>
						<td>Cookie técnica propia de sesión. Son un tipo de cookies diseñadas para recabar y almacenar datos mientras el usuario accede a la página web y por ejemplo para no volver a pedirle que vuelva a utilizar su usuario y contraseña para identificarse.</td>
						<td>Sesión</td>
						</tr>
						<tr>
						<td>Técnica</td>
						<td>XSRF-TOKEN</td>
						<td>Cookies de seguridad para autenticar usuarios, evitar el uso fraudulento de credenciales de inicio de sesión y proteger los datos de usuarios frente a terceros no autorizados.</td>
						<td>Sesión</td>
						</tr>
					</tbody>
				</table>
				
				<p> Cookies de terceros: </p>

				<table border="1" cellspacing="0" cellpadding="8">
					<thead>
						<tr>
						<th>Cookie</th>
						<th>Nombre</th>
						<th>Prop&oacute;sito</th>
						<th>Expiraci&oacute;n</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>Google Analytics</td>
						<td>__ga, __gat,__gid</td>
						<td>Informes estadísticos sobre como los usuarios encuentran la página web y cómo la utilizan: páginas visitadas, tiempo de estancia, tipo de navegador… <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es-419" target="_blank">Más información</a></td>
						<td><a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es-419" target="_blank">Ver</a></td>
						</tr>
						<tr>
						<td>Cloudflare</td>
						<td>_cfduid</td>
						<td>Se utiliza para anular las restricciones de seguridad basadas en la dirección IP del visitante. Su finalidad es mejorar la seguridad del sitio Web.</td>
						<td>5 años</td>
						</tr>
					</tbody>
				</table>
				<br>
				<h3 class="text-center">Configuración de cookies</h3>
				<p>Para conocer la forma en la que configurar la gestión de cookies en su navegador puede consultar los siguientes links de los principales navegadores y dispositivos:</p>
				
				<p>-Para <a href="http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-11">Internet Explorer</a>™  
				   -Para <a href="http://www.apple.com/legal/privacy/es/cookies/">Safari</a>™   
				   -Para <a href="https://support.google.com/chrome/answer/95647?hl=es">Chrome</a>™  
				   -Para <a href="https://support.mozilla.org/es/kb/cookies-informacion-que-los-sitios-web-guardan-en-?redirectlocale=en-US&amp;redirectslug=Cookies">Firefox</a>™  
				   -Para <a href="http://help.opera.com/Windows/12.00/es-ES/cookies.html">Opera</a>™  
				   -Para <a href="https://privacy.microsoft.com/es-es/windows-10-microsoft-edge-and-privacy">Edge</a>™
				</p>


				<h3 class="text-center">Aceptación de cookies</h3>

				<p>Al acceder a este sitio web o aplicación por primera vez, verá una ventana dónde se le informa de la utilización de las cookies y donde puede consultar esta "Política de cookies". Si usted consiente la utilización de cookies, 
					continúa navegando o hace clic en algún link se entenderá que usted ha consentido nuestra política de cookies y por tanto la instalación de las mismas en su equipo o dispositivo.</p>

				<p>Si usted quiere, puede cambiar la configuración de cookies en cualquier momento, configurando su navegador para aceptar, o no, las cookies que recibe o para que el navegador le avise cuando un servidor quiera guardar una cookie. 
					Le informamos que en el caso de bloquear o no aceptar la instalación de cookies, es posible que ciertos servicios no estén disponibles sin la utilización de éstas o que no pueda acceder a determinados servicios ni tampoco aprovechar por completo todo lo que nuestras webs y aplicaciones le ofrecen.</p>

				<p>JC le agradece que consienta la aceptación de cookies, esto nos ayuda a obtener datos más precisos que nos permiten mejorar el contenido y el diseño de nuestras páginas webs y aplicaciones para adaptarlas a sus preferencias.</p>
			</div>
		</div>
    </div>
</section>

@endsection