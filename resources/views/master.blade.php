<!DOCTYPE html>
<html>
<head>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<!-- Scripts -->


	<title>pos</title>
</head>
<body>
 
		<div class="container">
			<div class="card">
			<div class="card-body height:auto">
		<h2 class="text-center">MY PRODUK</h2>
		<hr>
		<nav>
			<a href="/create"><button class="btn btn-primary">Create</button></a>
			
			<a href="/read"><button class="btn btn-primary">Read</button></a>
			
		</nav>
		<hr>
		

	<br/>
	<br/>
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
</div>
</div>
	<footer>
		<p class="text-center">&copy;<a href=#>SintyaNatalia.2023</a></p>
	</footer>

</div>
 
</body>
</html>