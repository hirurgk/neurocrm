<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Транспорт</title>
		
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="{{ asset('/js/transport.js') }}"></script>
	</head>

	<body>
		<header>
			<nav class="container navbar navbar-default">
				<ul class="container nav navbar-nav">
					<li>
						<a href="/">Список</a>
					</li>
					<li>
						<a href="/add">Добавить событие</a>
					</li>
					<li>
						<a href="/about">Описание</a>
					</li>
				</ul>
			</nav>
		</header>

		<section class="container">
			@yield('content')
		</section>
	</body>
</html>