<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<p>
			{!! str_replace("\r\n", "<br>", $data['cuerpo']) !!}
		</p>
		<p>
			Este correo electrónico ha sido enviado por {{ $data['email'] }} a través del formulario de contacto de <a href="https://josecarlosroman.com">Jose Carlos Román</a>
		</p>
	</body>
</html>