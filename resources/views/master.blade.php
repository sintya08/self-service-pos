<!DOCTYPE html>
<html>
<head>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

	<title>pos</title>
</head>
<body>
 
	<header>
 
		<h2>MY PRODUK</h2>
		<nav>
			<a href="/create">HOME</a>
			|
			<a href="/read">READ</a>
			|
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p >&copy;<a href=#></a></p>
	</footer>
 
</body>
</html>