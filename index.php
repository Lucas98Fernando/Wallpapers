<!DOCTYPE html>
<html>
<head>
	<meta charset= "UTF-8";>	
	<title> Wallpapers FULL HD</title>
	<!--Libraries of Bootstrap-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<!--Font-->
  		<link href="https://fonts.googleapis.com/css?family=Amarante&display=swap" rel="stylesheet">
  	<!--Favicon-->
  		<link rel="shortcut icon" type="image/png" href="https://www.freepnglogos.com/uploads/games-png/games-file-video-game-controller-icon-svg-wikimedia-commons-27.png"/>
  	<!--CSS External-->
  		<link href="css/style.css" rel="stylesheet">
</head>
<body>

	<!--Navbar-->
		<?php include './header.php'; ?>
	<!--End Navbar-->

	<!-- Header -->
		<div class="header">
			<!-- Header here -->
		</div>

	<!--Slideshow-->
	<div id="demo" class="carousel slide" data-ride="carousel">

	<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
	
	<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active" data-interval="3000">
				<img src="./img/bf.jpg" alt="Battlefield 4">
				<div class="carousel-caption d-none d-md-block">
					<h4>Battlefield 4</h4>
				</div>
			</div>
			<div class="carousel-item" data-interval="3000">
				<img src="./img/tombraider.jpg" alt="Tomb Raider">
				<div class="carousel-caption d-none d-md-block">
					<h4>Tomb Raider</h4>
				</div>
			</div>
			<div class="carousel-item" data-interval="3000">
				<img src="./img/batman.jpg" alt="Batman Arkham Night">
				<div class="carousel-caption d-none d-md-block">
					<h4>Batman Arkham Night</h4>
				</div>
			</div>
		</div>
	
	<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>

	<br>

	<!-- Photo Grid -->
		<div class="row"> 
			<div class="column">
				<img src="./img/batman1.jpg" style="width:100%">
				<img src="./img/dark.jpg" style="width:100%">
			</div>
			<div class="column">
				<img src="./img/tw3.jpg" style="width:100%">
				<img src="./img/spider.png" style="width:100%">
			</div>  
			<div class="column">
				<img src="./img/car.jpg" style="width:100%">
				<img src="./img/lara.jpg" style="width:100%">
			</div>
			<div class="column">
				<img src="./img/mario.jpg" style="width:100%">
				<img src="./img/hzd.jpg" style="width:100%">
			</div>
		</div>

	<br>

	<!--Footer-->
	<?php include './footer.php'; ?>
	<!--End Footer-->

</body>
</html>