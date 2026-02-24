<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Vitrina Estelar — Productos</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

	@include('layout.navbar')

	@yield('content')

	@include('layout.footer')

</body>
</html>