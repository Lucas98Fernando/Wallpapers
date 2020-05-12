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
	  <h1>Games Wallpapers</h1>
	  <p>Você pode aquirir de graça todos esses incríveis papéis de parede, divirta-se!</p>
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
      		<img src="https://wallpaperaccess.com/full/2994.jpg" alt="Battlefield 4">
      		<div class="carousel-caption d-none d-md-block">
    			<h4>Battlefield 4</h4>
  			</div>
    	</div>
    	<div class="carousel-item" data-interval="3000">
      		<img src="https://images6.alphacoders.com/423/thumb-1920-423181.jpg" alt="Tomb Raider">
      		<div class="carousel-caption d-none d-md-block">
    			<h4>Tomb Raider</h4>
  			</div>
    	</div>
    	<div class="carousel-item" data-interval="3000">
      		<img src="https://wallpapermemory.com/uploads/532/batman-arkham-knight-wallpaper-1080p-174099.jpg" alt="Batman Arkham Night">
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
    		<img src="https://comicvine1.cbsistatic.com/uploads/original/11127/111278592/5475050-batman.jpg" style="width:100%">
    		<img src="https://images.wallpaperscraft.com/image/dark_souls_ii_dark_souls_warrior_knight_from_software_namco_bandai_games_98197_1920x1080.jpg" style="width:100%">
  		</div>
  		<div class="column">
    		<img src="https://i.pinimg.com/originals/2a/65/6b/2a656b330532432caf1742c8586f7fff.jpg" style="width:100%">
    		<img src="https://www.gamerview.com.br/wp-content/uploads/2018/04/General-1920x1080-spider-Spider-Man-video-games-wallpaper-wp3805861.png" style="width:100%">
  		</div>  
  		<div class="column">
    		<img src="https://s1.1zoom.me/b5050/39/Nissan_Skyline_Concept_452430_1920x1080.jpg" style="width:100%">
    		<img src="https://images5.alphacoders.com/521/521938.jpg" style="width:100%">
  		</div>
  		<div class="column">
    		<img src="https://wallpapermemory.com/uploads/145/super-mario-galaxy-background-1080p-421329.jpg" style="width:100%">
    		<img src="https://images7.alphacoders.com/614/614656.jpg" style="width:100%">
  		</div>
	</div>

<br>

<!--Footer-->
<?php include './footer.php'; ?>
<!--End Footer-->

</body>
</html>