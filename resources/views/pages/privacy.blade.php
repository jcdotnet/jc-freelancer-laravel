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
				<h1>Aviso legal y política de privacidad</h1>				
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="{{route('home', Config::get('app.locale') == 'es' ? NULL : Config::get('app.locale')) }}"> @lang("Inicio") </a>
					<span class="breadcrumb-item active">@lang("Privacidad")</span>
				</nav>
			</div>
		</div>
    </div>
</section>


<section>
   <div class="container">
       <div class="row row-content mt-4">
		   <div class="col">
			   <p>En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio Electrónico (LSSI CE), informamos a los usuarios de los datos de la empresa propietaria de esta web: </p>
                <p><u>Responsable</u></p>
				<ul>
					<li><strong>Denominación Social:</strong> José Carlos Román Rubio</li>
					<li><strong>NIF: </strong>77469228F</li>
					<li><strong>Nombre Comercial:</strong> José Carlos Román Rubio</li>
					<li><strong>Domicilio Social:</strong> C/ Jorge Guillén 41, 1D, 29003 Málaga</li>
					<li><strong>Responsable de seguridad:</strong> [José Carlos Román Rubio] (info@josecarlosroman.com)</li>
				</ul>
				<p><u>Contacto</u></p>
				<ul>
					<li><strong>eMail:</strong> info@josecarlosroman.com</li>
					<li><strong>Formulario de contacto online:</strong> https://josecarlosroman.com/contacto</li>
				</ul>
				<p><u>Registros</u></p>
                <ul>
					<li>Registro de tratamiento conforme al RGPD: Clientes/Proveedores y Usuarios Web.</li>
					<li>Nombre de dominio (sitio web): https://josecarlosroman.com/ </li>
				</ul>
				
                <h4 class="text-center">OBJETO</h4>
				
				<p>"Jose Carlos Román Rubio" (en adelante, JC), responsable del sitio web, pone a disposición de los 
					usuarios el presente documento con el que pretende dar cumplimiento a las obligaciones dispuestas 
					en la Ley 34/2002, de Servicios de la Sociedad de la Información y del Comercio Electrónico (LSSI-CE), 
					así como informar a todos los usuarios del sitio web respecto a cuáles son las condiciones de uso del mismo
				</p>
				
                <p>Toda persona que acceda a este sitio web asume el papel de usuario, comprometiéndose a la observancia y cumplimiento riguroso de las disposiciones aquí dispuestas, así como a cualesquiera otra disposición legal que fuera de aplicación.</p>
				<p>JC se reserva el derecho a modificar cualquier tipo de información que pudiera aparecer en el sitio web, sin que exista obligación de preavisar o poner en conocimiento de los usuarios dichas obligaciones, entendiéndose como suficiente con la publicación en el sitio web.</p>
				
				<h4 class="text-center">PROTECCIÓN DE DATOS</h4>
				
				<p>JC se encuentra profundamente comprometido con el cumplimiento de la normativa española de 
				protección de datos de carácter personal, y garantiza el cumplimiento íntegro de las obligaciones 
				dispuestas, así como la implementación de las medidas de seguridad dispuestas en el art. 9 de la Ley 
				15/1999, de Protección de Datos de Carácter Personal (LOPD) y su Reglamento de Desarrollo, así como 
				para el cumplimiento del Reglamento General de Protección de Datos (RGPD) (UE) 2016/679. 
				De conformidad con estas normativas, informamos que la utilización de nuestra página web requiere que 
				se nos faciliten ciertos datos personales a través de formularios de registro o contacto, o mediante el 
				envío de emails, y que éstos serán objeto de tratamiento por "José Carlos Román Rubio". El envío de estos 
				datos personales constituye el consentimiento expreso al tratamiento de los mismos, si bien este consentimiento 
				es de carácter revocable. Más información en nuestra <a href="#politica-privacidad">Política de Privacidad</a></p>
				
				
				<h4 class="text-center">PROPIEDAD INTELECTUAL, NORMATIVA Y FORO</h4>
				
				<p>El sitio web, incluyendo a título enunciativo pero no limitativo su programación, edición, compilación y demás elementos necesarios para su funcionamiento, 
					los diseños, logotipos, texto y/o gráficos son propiedad de JC o en su caso dispone de licencia o autorización expresa por parte de los autores. </p>
				<p>Todos los contenidos del sitio web se encuentran debidamente protegidos por la normativa de propiedad intelectual e industrial, así como inscritos en los registros públicos correspondientes, 
					y no se permite la reproducción y/o publicación, total o parcial, del sitio web, ni su tratamiento informático, su distribución, difusión, modificación o transformación, 
					sin el permiso previo y por escrito del mismo.</p> 
				<p>Los diseños, logotipos, texto y/o gráficos ajenos a JC y que pudieran aparecer en el sitio web, pertenecen a sus respectivos propietarios, siendo ellos mismos responsables 
					de cualquier posible controversia que pudiera suscitarse respecto a los mismos. En todo caso, JC cuenta con la autorización expresa y previa por parte de los mismos.</p>
				<p>JC reconoce a favor de sus titulares los correspondientes derechos de propiedad industrial e intelectual, no implicando su sola mención o aparición en el sitio web la existencia 
					de derechos o responsabilidad alguna del prestador sobre los mismos, como tampoco respaldo, patrocinio o recomendación por parte del mismo.</p>
				<p>El usuario puede utilizar el material que aparezca en este sitio web para su uso personal y privado, quedando prohibido su uso con fines comerciales. "José Carlos Román Rubio" velará por el cumplimiento 
					de las anteriores condiciones, como por la debida utilización de los contenidos presentados en sus páginas web, ejercitando todas las acciones civiles y penales que le correspondan en el caso de infracción 
					o incumplimiento de estos derechos por parte del usuario.</p>
				
				<h4 class="text-center">LEY APLICABLE Y JURISDICCIÓN</h4>
				
				<p>Las presentes Condiciones de Uso del sitio web se rigen en todos y cada uno de sus extremos por la ley española. El idioma de redacción e interpretación de este aviso legal es el español. Para la resolución 
					de todas las controversias o cuestiones relacionadas con el presente sitio web o de las actividades en él desarrolladas, será de aplicación la legislación española, a la que se someten expresamente las partes, 
					siendo competentes para la resolución de todos los conflictos derivados o relacionados con su uso los Juzgados y Tribunales de Málaga.</p>
		   </div>
	   </div>
	   <div class="row">
		   <div class="col row-header">
			   <h2 id="politica-privacidad">Política de privacidad</h2>
		   </div>
	   </div>
	   <div class="row">
		   <div class="col row-content">			   
				<p>JC informa a los usuarios del sitio web sobre su política respecto del tratamiento y protección de 
				los datos de carácter personal de los usuarios y clientes que puedan ser recabados por la navegación, 
				adquisición de productos o contratación de servicios a través de su sitio web. En este sentido, JC 
				garantiza el cumplimiento de la normativa vigente en materia de protección de datos personales, 
				reflejada en la Ley Orgánica 15/1999 de 13 de diciembre, de Protección de Datos de Carácter Personal 
				y en el Real Decreto 1720/2007, de 21 diciembre, por el que se aprueba el Reglamento de Desarrollo de la LOPD, 
				y en Reglamento General de Protección de Datos (RGPD) (UE) 2016/679.</p>
				
				<h4 class="text-center">MEDIDAS DE SEGURIDAD</h4>
				<p>En cumplimiento de la legislación vigente en materia de protección de datos, se informa a los usuarios de que, 
				JC ha adoptado las medidas técnicas y organizativas conforme a lo dispuesto en la citada normativa. 
				Los datos personales que se recogen en los formularios son objeto de tratamiento, únicamente, por parte del personal 
				de JC o de los Encargados del Tratamiento aquí establecidos. Se han adoptado las medidas de seguridad adecuadas a los 
				datos que se facilitan y, además, se han instalado todos los medios y medidas técnicas a su alcance para evitar la pérdida, 
				mal uso, alteración, acceso no autorizado y robo de los datos que nos facilitan.
				</p>
				
                <h4 class="text-center">VERACIDAD DE LOS DATOS</h4>
				
				<p>El Cliente o Usuario manifiesta que todos los datos facilitados por él son ciertos y correctos y se compromete a mantenerlos actualizados, comunicando, a JC, cualquier modificación de los mismos. El usuario responderá de la veracidad de sus datos y será el único responsable de cuantos conflictos o litigios 
					pudieran resultar por la falsedad de los mismos. Es importante que, para que podamos mantener los datos personales actualizados, el usuario informe a JC siempre que haya habido alguna modificación en los mismos. En caso contrario, no podemos responder de su veracidad.</p>

				<h4 class="text-center">EJERCICIO DE DERECHOS</h4>

				<p>La LOPD y el RGPD concede a los interesados la posibilidad de ejercer una serie de derechos relacionados con el 
				tratamiento de sus datos personales. En tanto en cuanto los datos del usuario son objeto de tratamiento por parte 
				de JC, éstos podrán ejercer sus derechos. Para ello, el usuario deberá dirigirse, aportando documentación que acredite 
				su identidad (DNI o pasaporte), mediante correo electrónico a info@josecarlosroman.com, o bien mediante comunicación 
				escrita a la dirección que aparece en nuestro aviso legal. Dicha comunicación deberá reflejar la siguiente información: 
				Nombre y apellidos del usuario, la petición de solicitud, el domicilio y los datos acreditativos. </p>

				<p>El ejercicio de derechos deberá ser realizado por el propio usuario. No obstante, podrán ser ejecutados 
				por una persona autorizada como representante legal del autorizado. En tal caso, se deberá aportar la documentación 
				que acredite esta representación del interesado.</p>
				
				<p>El usuario podrá solicitar el ejercicio de los derechos siguientes:</p>
				<ul>
					<li><p>Derecho a solicitar el acceso a los datos personales.</p></li>
					<li><p>Derecho a solicitar su rectificación (en caso de que sean incorrectos) o supresión.</p></li>
					<li><p>Derecho a solicitar la limitación de su tratamiento, en cuyo caso únicamente serán 
					conservados por JC para el ejercicio o la defensa de reclamaciones.</p></li>
					<li><p>Derecho a oponerse al tratamiento: JC dejará de tratar sus datos, salvo que por motivos 
					legítimos o el ejercicio o la defensa de posibles reclamaciones se tengan que seguir tratando.</p></li>
					<li><p>Derecho a la portabilidad de los datos: en caso de que quiera que sus datos sean tratados por otra firma, 
					JC le facilitará la portabilidad de sus datos al nuevo responsable.</p></li>
				</ul>
				
				<p>En el caso de que se haya otorgado el consentimiento para alguna finalidad específica, <strong>el usuario 
				tiene derecho a retirar el consentimiento en cualquier momento</strong>, sin que ello afecte a la licitud del 
				tratamiento basado en el consentimiento previo a su retirada.</p>
				
				<p>Si un usuario considera que hay un problema con la forma en que JC está manejando sus datos, 
				puede dirigir sus reclamaciones al Responsable de Seguridad o a la autoridad de protección de datos que corresponda, 
				siendo la Agencia Española de Protección de Datos la indicada en el caso de España.</p>
				
				<h4 class="text-center">CONSERVACIÓN DE LOS DATOS</h4>	
				
				<p>Los datos desagregados serán conservados sin plazo de supresión. En cuanto a los datos de Clientes, 
				el período de conservación de los datos personales variará en función del servicio que el Cliente contrate. 
				En cualquier caso, será el mínimo necesario, pudiendo mantenerse hasta:</p>
				<ul>
					<li>
						<p>4 años: Ley sobre Infracciones y Sanciones en el Orden Social (obligaciones en materia de afiliación, 
						altas, bajas, cotización, pago de salarios…); Arts. 66 y sig. Ley General Tributaria (libros de contabilidad…)</p>
					</li>
					<li>
						<p>5 años: Art. 1964 Código Civil (acciones personales sin plazo especial)</p>
					</li>
					<li><p>6 años: Art. 30 Código de Comercio (libros de contabilidad, facturas…)</p></li>
					<li><p>10 años: Art. 25 Ley de Prevención del Blanqueo de Capitales y Financiación del Terrorismo.</p></li>
				</ul>
				
				<p>Los usuarios de listas de correo o los subidos por JC a páginas o perfiles de RRSS, se conservarán 
				hasta que el usuario retire el consentimiento.</p>
				
				<p>Datos de candidatos (C.V.), de haberlos: En caso de que el candidato no sea seleccionado, JC podrá mantener almacenado 
				su currículo un máximo de dos años para incorporarlo a futuras convocatorias, a menos que el candidato se manifieste en contrario.</p>
				
				<h4 class="text-center">OBTENCIÓN Y TRATAMIENTO DE DATOS</h4>
				
				<p>JC tiene el deber de informar a los usuarios de su sitio web acerca de la recogida de datos de carácter personal 
				que pueden llevarse a cabo, bien sea mediante el envío de correo electrónico o al cumplimentar los formularios incluidos 
				en el sitio web. En este sentido, JC será considerado como Responsable de los datos recabados mediante los medios anteriormente descritos. </p>
				
				<p>A su vez JC informa a los usuarios de que la finalidad del tratamiento de los datos recabados contempla la atención 
				de solicitudes realizadas por los usuarios, la inclusión en la agenda de contactos, la prestación de productos o servicios 
				y la gestión de la relación comercial. Las operaciones, gestiones y procedimientos técnicos que se realicen de forma automatizada 
				o no automatizada y que posibiliten la recogida, el almacenamiento, la modificación, la transferencia y otras acciones sobre datos 
				de carácter personal, tienen la consideración de Tratamiento de datos personales. </p>				
					
				<p>El Sitio Web de JC cuenta con un cifrado SSL, que permite al Usuario el envío seguro de sus datos personales a través de los formularios de contacto del sitio web.</p>
				
				<p>JC pone a disposición de los usuarios una serie de mecanismos telemáticos para la recogida y tratamiento de sus datos personales, con las finalidades previstas anteriormente. Los datos personales proporcionados de manera telemática, bien sea a través de email, 
					de los formularios de contacto de esta web o contrataciones online serán utilizados para la gestión comercial y administrativa de los clientes y usuarios de la empresa. Estos datos, serán tratados a través de servidores gestionados por <a href="https://raiolanetworks.es/" target="_blank">https://raiolanetworks.es/</a>, 
					que también es la empresa prestadora de servicios de correo electrónico, y, que tendrá la consideración de Encargado del Tratamiento.</p>
				
				<p>Tal y como establece la LSSICE, JC se compromete a no remitir comunicaciones comerciales sin identificarlas como tales. A estos efectos, no será considerada como comunicación comercial la información enviada a los clientes para el mantenimiento de la relación contractual existente.</p>
				
				<p>En cualquier caso, se obtendrán únicamente los datos precisos para poder realizar el servicio contratado, o para poder responder adecuadamente a la petición de información realizada por el usuario.</p>
				
				<p>En ocasiones, los datos personales se proporcionarán a través de enlaces a sitios web de terceros. En este caso, en ningún momento el personal de JC tendrá acceso a los datos personales que el Cliente facilite a dichos terceros.</p>

				<h4 class="text-center">REDES SOCIALES</h4>	

				<p>JC cuenta con perfil en las principales redes sociales de Internet (Facebook, Twitter, Youtube, Google+), 
				reconociéndose en todos los casos Responsable del tratamiento de los datos de sus seguidores, fans, suscriptores, 
				comentaristas y otros perfiles de usuarios (en adelante, seguidores) publicados por JC. El tratamiento que JC 
				llevará a cabo con dichos datos dentro de cada una de las referidas redes será el que la red social permita a los 
				perfiles corporativos.</p>
				
				<p>Así pues, JC podrá informar, cuando la ley no lo prohíba, a sus seguidores por cualquier vía que la red social permita 
				sobre sus actividades y ofertas, así como prestar servicio personalizado de atención al cliente. En ningún caso JC extraerá 
				datos de las redes sociales, a menos que se obtuviera puntual y expresamente el consentimiento del usuario para ello (por ejemplo, para la realización de un concurso).
				</p>
	
				
				<h4 class="text-center">COMUNICACIÓN DE INFORMACIÓN A TERCEROS</h4>

				<p>JC no cederá ni comunicará a ningún tercero tus datos, excepto en los casos legalmente previstos 
				o cuando la prestación de un servicio implique la necesidad de una relación contractual con un 
				encargado de tratamiento, y siempre de acuerdo con las condiciones generales aprobadas por el usuario con 
				anterioridad a la contratación del mismo. Así, al contratar nuestros servicios, el usuario acepta que alguno 
				de los mismos puedan ser, total o parcialmente, subcontratados a otras personas o empresas, que tendrán la 
				consideración de Encargados del Tratamiento, con los que se ha convenido el correspondiente contrato de 
				confidencialidad, o adherido a sus políticas de privacidad, establecidas en sus respectivas páginas web. 
				También acepta que algunos de los datos personales recabados sean facilitados a estos Encargados del Tratamiento, 
				cuando sea necesario para la efectiva realización del servicio contratado. El usuario podrá negarse a la cesión 
				de tus datos a los Encargados del Tratamiento, mediante petición escrita, por cualquiera de los medios anteriormente 
				referenciados.</p>
				
				<h4 class="text-center">CONFIDENCIALIDAD</h4>

				<p>La información suministrada por el cliente tendrá, en todo caso, la consideración de confidencial, 
				sin que pueda ser utilizada para otros fines que los relacionados con los servicios contratados o productos 
				adquiridos a JC. JC se obliga a no divulgar ni revelar información sobre las pretensiones del cliente, los 
				motivos del asesoramiento solicitado o la duración de su relación con este. </p>
				
				<h4 class="text-center">VALIDEZ</h4>
				<p>Esta política de privacidad y de protección de datos ha sido redactada a día 25 de mayo de 2018, y podrá 
				variar en función de los cambios de normativa y jurisprudencia que se vayan produciendo, siendo responsabilidad 
				del titular de los datos la lectura del documento actualizado, en orden a conocer sus derechos y obligaciones 
				al respecto en cada momento.</p>
		   </div>
		</div>
    </div>
</section>

@endsection