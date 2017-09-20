@extends ('layouts.default')

@section('head')
	<meta name="robots" content="noindex, follow">
@endsection

@section('content')

<section id="breadscrumb" class="first-section">
   <div class="container">    
        <div class="row">
			<div class="col">
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale'))}}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">Cookies</span>
				</nav>
			</div>
		</div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col row-header">
				<h1>Política de cookies</h1>	
			</div>
		</div>
	</div>
</section>
	

<section>
    <div class="container">
        <div class="row row-content">
			<div class="col">
				<p>En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio Electrónico le informamos de la utilización de cookies en las webs 
					y aplicaciones de "Jose Carlos Román Rubio" ("Jose Carlos Román Rubio", en adelante), con el fin de facilitar y mejorar la navegación a los usuarios, 
					recordando por donde navegó en el sitio web, las preferencias y configuraciones de visualización, y ofreciendo a cada usuario información que puede ser de su interés.</p>

				<h3 class="text-center"> ¿Qué son las cookies? </h3>       
				<p> Una cookie es un archivo de información enviado por un sitio web y almacenado en el navegador del usuario. Las cookies son inofensivas y no almacenan ningún tipo de información personal, solo almacenan los hábitos de navegación del usuario. 
					Usted puede eliminar las cookies en cualquier momento desde su navegador o si lo desea también puede cambiar la configuración para declinar las cookies, si lo hace es posible que empeore su experiencia de navegación.  </p>

				<h3 class="text-center">Tipos de cookies </h3>
				<p><em>Cookies Técnicas:</em> para ayudar a mejorar la calidad de nuestro servicio, incluyendo almacenar preferencias del usuario, los resultados de búsqueda, así como rastrear tendencias de usuario.</p>

				<p><em>Cookies estadísticas:</em> recogen información sobre fecha de visita, la URL y el título de la página web visitada. Los informes generados con esta información serán meramente estadísticos dando información sobre el comportamiento de navegación de forma anónima.</p>

				<p><em>Cookies de sesión:</em> guardan información del tipo de usuario, guardando el nick de usuario para evitar introducirlo página a página, también se guarda información encriptada e información sobre los favoritos del usuario.</p>

				<p><em>Cookies Analíticas:</em> son utilizadas para realizar el seguimiento sobre el motor de búsqueda desde el que se ha visitado la web y qué términos de búsqueda se utilizaron para encontrarlo, calculan el tiempo pasado en la web en cada sesión y el número de veces que el usuario ha visitado la página.</p>

				<h2 class="text-center">Cookies usadas en esta Web </h2>
				<p> Cookies técnicas propias: </p>
				<table border="1" cellspacing="0" cellpadding="8">
					<thead>
						<tr>
						<th>Nombre</th>
						<th>Prop&oacute;sito</th>
						<th>Expiraci&oacute;n</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>complianceCookie, cookie_notice_accepted (en https://josecarlosroman.com/wordpress)</td>
						<td>Cookies que almacenan si el usuario ha aceptado el uso de cookies. Su finalidad es cumplir con la ley de cookies.</td>
						<td>Sesi&oacute;n</td>
						</tr>
						<tr>
						<td>wordfence_verifiedHuman (en https://josecarlosroman.com/wordpress)</td>
						<td>cookie usada por el plugin WordFence de WordPress. Su finalidad es ofrecer seguridad a la página Web.</td>
						<td>1 día</td>
						</tr>
						<tr>
						<td>laravel_session</td>
						<td>Cookie técnica propia de sesión. Son un tipo de cookies diseñadas para recabar y almacenar datos mientras el usuario accede a la página web y por ejemplo para no volver a pedirle que vuelva a utilizar su usuario y contraseña para identificarse.</td>
						<td>Sesión</td>
						</tr>
						<tr>
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
						<th>Nombre</th>
						<th>Prop&oacute;sito</th>
						<th>Expiraci&oacute;n</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>__ga, __gat,__gid</td>
						<td>Informes estadísticos sobre como los usuarios encuentran la página web y cómo la utilizan: páginas visitadas, tiempo de estancia, tipo de navegador… <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es-419" target="_blank">Más información</a></td>
						<td><a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es-419" target="_blank">Ver</a></td>
						</tr>
						<tr>
						<td>_cfduid</td>
						<td>cookie usada por CloudFlare. Su finalidad es mejorar la seguridad del sitio Web.</td>
						<td>5 años</td>
						</tr>
					</tbody>
				</table>

				<h3 class="text-center">Configuración de cookies</h3>
				<p>Para conocer la forma en la que configurar la gestión de cookies en su navegador puede consultar los siguientes links de los principales navegadores y dispositivos:</p>
				<p>-Para <a href="http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-11">Internet Explorer</a>™  
				   -Para <a href="http://www.apple.com/legal/privacy/es/cookies/">Safari</a>™   
				   -Para <a href="https://support.google.com/chrome/answer/95647?hl=es">Chrome</a>™  
				   -Para <a href="https://support.mozilla.org/es/kb/cookies-informacion-que-los-sitios-web-guardan-en-?redirectlocale=en-US&amp;redirectslug=Cookies">Firefox</a>™  
				   -Para <a href="http://help.opera.com/Windows/12.00/es-ES/cookies.html">Opera</a>™  
				   -Para <a href="https://privacy.microsoft.com/es-es/windows-10-microsoft-edge-and-privacy">Edge</a>™</p>
				
				<h3 class="text-center">Aceptación de cookies</h3>

				<p>Al acceder a este sitio web o aplicación por primera vez, verá una ventana dónde se le informa de la utilización de las cookies y donde puede consultar esta "Política de cookies". Si usted consiente la utilización de cookies, 
					continúa navegando o hace clic en algún link se entenderá que usted ha consentido nuestra política de cookies y por tanto la instalación de las mismas en su equipo o dispositivo.</p>

				<p>Si usted quiere, puede cambiar la configuración de cookies en cualquier momento, configurando su navegador para aceptar, o no, las cookies que recibe o para que el navegador le avise cuando un servidor quiera guardar una cookie. 
					Le informamos que en el caso de bloquear o no aceptar la instalación de cookies, es posible que ciertos servicios no estén disponibles sin la utilización de éstas o que no pueda acceder a determinados servicios ni tampoco aprovechar por completo todo lo que nuestras webs y aplicaciones le ofrecen.</p>

				<p>"Jose Carlos Román Rubio" le agradece que consienta la aceptación de cookies, esto nos ayuda a obtener datos más precisos que nos permiten mejorar el contenido y el diseño de nuestras páginas webs y aplicaciones para adaptarlas a sus preferencias.</p>
			</div>
		</div>
    </div>
</section>

@endsection