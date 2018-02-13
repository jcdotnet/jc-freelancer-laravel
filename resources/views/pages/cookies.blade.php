@extends ('layouts.default')

@section('content')

<section id="breadscrumb" class="first-section">
   <div class="container">    
        <div class="row breadscrumb-container">
            <div>
                <ul class="breadcrumb">
                    <li><a href='{{route('home')}}'>{{ __('Inicio')}}</a></li>
                    <li class="active">Cookies</li>
               </ul>
            </div>
            <div>
                <h1> Política de cookies </h1>
                <hr>
            </div>
        </div>
    </div>
</section>


<section id="escritorio-movil">
    <div class="container">
        <div class="row row-content">
            <p>Desde josecarlosroman.com y en cumplimiento de la Ley 34/2002, de fecha 11 de julio, de servicios de la sociedad de la información y del comercio electrónico, informamos a nuestros usuarios que usamos cookies propias y de terceros para mejorar nuestros servicios. </p>
           
            <h2 class="center"> ¿Qué es una cookie? </h2>       
            <p> Una cookie es un archivo de información enviado por un sitio web y almacenado en el navegador del usuario. Las cookies son inofensivas y no almacenan ningún tipo de información personal, solo almacenan los hábitos de navegación del usuario. Usted puede eliminar las cookies en cualquier momento desde su navegador o si lo desea también puede cambiar la configuración para declinar las cookies, si lo hace es posible que empeore su experiencia de navegación.  </p>
           
            <h2 class="center">¿Qué tipos de cookies utiliza josecarlosroman.com?</h2>
            <p><strong>Cookies técnicas:</strong> Son aquéllas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.</p>    
            <p>Las cookies técnicas que usa josecarlosroman.com son:</p>  
            <ul>
               <li>
                   cookieCompliance: cookie que almacena si el usuario ha aceptado el uso de cookies. Su finalidad es cumplir con la ley de cookies.
                </li>
                <li>cookie_notice_accepted (en http://josecarlosroman.com/wordpress): cookie que almacena si el usuario ha aceptado el uso de cookies. Su finalidad es cumplir con la ley de cookies.
                </li>
                <li>
                    wordfence_verifiedHuman (en http://josecarlosroman.com/wordpress): cookie usada por el plugin WordFence de WordPress. Su finalidad es ofrecer seguridad a la página Web.
                </li>
                <li>
                    tk_ni (en http://josecarlosroman.com/wordpress): cookie usada por WordPress para mejorar la experiencia del usuario.
                </li>
            </ul> 
            
            <p><strong>Cookies de terceros: </strong>josecarlosroman.com puede utilizar cookies de terceros para recopilar información con fines estadísticos y de uso de la Web.</p>
            <p>Las cookies de terceros que usa josecarlosroman.com son:</p>
            <ul>
                <li>
                    _ga, _utma, _utmb, _utmc, _utmt. _utmz: cookies usada por Google Analytics. Su finalidad es medir el tráfico de este sitio. Puede obtener más información sobre estas cookies en <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es-419" target="_blank">este enlace.</a>  
                </li>
                <li>_cfduid: cookie usada por CloudFlare. Su finalidad es mejorar la seguridad del sitio Web. </li>
            </ul>
            
            <h2 class="center">Configuración o deshabilitación de las cookies</h2>
            <p>Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador.</p>
            <ul>
                <li><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank">Configurar o deshabilitar cookies en Google Chrome</a></li>
                <li><a href="https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Configurar o deshabilitar cookies en Internet Explorer</a></li>
                <li><a href="https://support.mozilla.org/t5/Cookies-y-cach%C3%A9/Habilitar-y-deshabilitar-cookies-que-los-sitios-web-utilizan/ta-p/13811?redirectlocale=es&redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we" target="_blank">Configurar o deshabilitar cookies en Firefox</a></li>
                <li><a href="https://support.apple.com/kb/ph21411?locale=es_ES" target="_blank">Configurar o deshabilitar cookies en Safari</a></li>
            </ul>
        </div>
    </div>
</section>

@endsection