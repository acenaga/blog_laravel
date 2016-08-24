<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de Administracion</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
</head>
<body>
	@include('admin.template.partials.nav')


	<div class="container">
	<h3>@yield('title')</h3>
	@include('flash::message')
	<section>
		@yield('content')

	</section>
	<section>
		@yield('biography')

	</section>

	</div>

	@include('admin.template.partials.footer')


	<script type="text/javascript" src="{{asset('plugins/jquery/js/jquery-3.1.0.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>