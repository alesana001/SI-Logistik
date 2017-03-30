<html>
	<head>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script type="text/javascript" src="/js/jquery-3.2.0.min.js"></script>
		<title>@yield('title')</title>
	</head>
	<body>
		<div class="container-fluid">
			@yield('content')
		</div>
	</body>
	@yield('js')
</html>