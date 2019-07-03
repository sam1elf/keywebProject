<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="KEYWEB AG">
		<meta name="keywords" content="HTML, CSS, PHP">
		<meta name="author" content="Samuel Walter">
		<title>KEYWEB Projekt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>

<body class="bg-dark text-light">

	<!-- TopBar -->
	<div class="container sticky-top bg-dark">
		<div class="row justify-content-between p-1">
			<div class="col-8">
				<a>Tel: 0177 - 8237498</a>
				<a>Social Media</a>
			</div>
			<div class="col-4 text-right">
				<button type="btn" class="btn btn-sm btn-outline-light justify-content-md-end">Login</button>
				
			</div>
		</div>
	</div>
	
	<!-- LoginWindow -->
	<div id="loginWindow" class="float-right bg-secondary p-3 text-left border border-info float-right">
		<form method="POST">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form> 
	</div>
	
	<!-- Carousel -->
	<div class="container">
		<div id="carouselTop" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselTop" data-slide-to="0" class="active"></li>
				<li data-target="#carouselTop" data-slide-to="1"></li>
				<li data-target="#carouselTop" data-slide-to="2"></li>
				<li data-target="#carouselTop" data-slide-to="3"></li>
				<li data-target="#carouselTop" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="w-100" src="media\slide01.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="w-100" src="media\slide03.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="w-100" src="media\slide04.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img class="w-100" src="media\slide05.jpg" alt="Fourth slide">
				</div>
				<div class="carousel-item">
					<img class="w-100" src="media\slide06.png" alt="Fifth slide">
				</div>
			</div>
		</div>
	</div>
	
	<!-- Navbar -->
	<div class="container mt-3">
		<nav class="navbar navbar-nav navbar-custom ">
			<div class="d-flex flex-grow-1">
				<div class="nav-item">
					<a class="nav-link pr-2" href="index.php">Home</a>
				</div>
				<div class="nav-item">
					<a class="nav-link px-2" href="projects.php">Projects</a>
				</div>
				<div class="nav-item">
					<a class="nav-link px-2" href="contact.php">Contact</a>
				</div>
			</div>
		</nav>
			
	</div>
	
	<!-- Content -->
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-4">
				<h2>Name</h2>
				<img class="mw-100" src="media/portrait_placeholder.png" alt="Profile Picture" />
			</div>
			<div class="col-md-8">
				<h2>Bio</h2>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.   
					Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.   
					Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.   </p>
			
			</div>
		</div>
	</div>
	
	<!-- Footer -->
	<div class="container mt-5">
		<div class="row justify-content-between">
			<p>Musterfira<br />Musterstraße 1<br />12345 Musterstadt<br /></p>
			<ul class="list-unstyled list-inline">
				<li class="list-inline-item"><a href="impressum.php">Impressum</a></li>
				<li class="list-inline-item"><a href="agb.php">AGB</a></li>
				<li class="list-inline-item"><a href="datenschutz.php">Datenschutz</a></li>
			</ul>
			<p>email@musterfirma.de<br />030 - 12345678</p>
		</div>
	</div>
</body>

</html>