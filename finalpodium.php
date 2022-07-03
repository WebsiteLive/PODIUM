<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Bootstrap file link-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!--JavaScript online link-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<!--customized css file link-->
	<link rel="stylesheet" type="text/css" href="styles/finalpodium.css"> 
	<!--fontawesome file link-->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
	<!--Online link for text animation-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<title>HOME</title>
</head>
<body>
	<!--NAVIGATION BAR-->
		<?php
			include 'include/finalnavbar.php'
		?>

	<!--IMAGE SLIDER-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	   		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
	    <div class="carousel-inner">
	    	<div class="carousel-item active">
	        	<img class="d-block w-100" src="img/pastel.jpg" alt="PODIUM"> </video>
	        	<div class="carousel-caption d-md-block" style="color: #65453A;">
				    <h5 class="animate__animated animate__slideInUp">PODIUM: Artist Freelancing Website</h5>
				    <p class="animate__animated animate__slideInUp"><i>"Every artist was first an amateur."</i></p>
				    <p class="animate__animated animate__slideInUp">&nbsp;&nbsp;&ndash; Ralph Waldo Emerson</p>
				    <!--&nbsp; = space, &ndash; = en dash "-" -->
				</div>
	    	</div>
		    <div class="carousel-item">
		        <img class="d-block w-100" src="img/gallery.jpg" alt="GALLERY">
		        <div class="carousel-caption d-md-block">
				    <h5>DREAM BIG AND LET YOUR ART SHINE</h5>
				    <p><a href="signup.php">Join Us Now!</a></p>
				</div>
		    </div>
		    <div class="carousel-item">
		        <img class="d-block w-100" src="img/watercolor.gif" alt="ARTS">
		        <div class="carousel-caption d-md-block">
				   <h5 class="animate__animated animate__backInRight">DREAM BIG AND LET YOUR ART SHINE</h5>
				   <p class="animate__animated animate__backInLeft" id="cap">Become an explorer in a world full of arts, join us now for free to experience the first artist platform in the Philippines.</p>
				    <p class="animate__animated animate__zoomIn" style="animation-delay: 0.5s;"><a href="#">Join Us Now!</a></p>
				</div>
		    </div>
	  	</div>
	</div>

	<!--SERVICES-->
	<div class="container-fluid padding">
		<div class="row welcome">
			<div class="col-12">
				<h1 style="font-size: 30px; padding: 10px; margin-top: 20px; font-weight: normal; color: #65453A;">Professional Services</h1>
			</div>
		</div>
	</div>

	<!--THREE COLUMNS-->
	<div class="container-fluid padding" style="padding: 7px; margin-top: 10px; color: #65453A; font-weight: normal;">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/painter.jpeg" style="width: 300px; height: 190px;">
				<p style="font-size: 20px; padding: 3px; margin-top: 10px;">Painting</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/drawing.jpg" style="width: 300px; height: 190px;">
				<p style="font-size: 20px; padding: 3px;margin-top: 10px;">Drawing</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/digital.jpg" style="width: 300px; height: 190px;">
				<p style="font-size: 20px; padding: 3px;margin-top: 10px;">Digital Art</p>
			</div>
		</div>
		
	</div>

	<!--SECTION-->
	<div class="container-fluid" style="padding-top: 75px;">
 		<div class="row" style="background-color: #d3d3d3;">
    		<div class="col display-4" style="font-size: 30px; padding-top: 120px; padding-left: 50px; width: 50%;">Do you want to earn while doing your passion at the comfort of your home?</div>
   			<div class="col-xs" style="width: 50%;"><img src="img/grid.jpg" style="width: 100%; height: 50vh; margin: 0px; padding-right: -10px;"></div>
  		</div>
  	</div>


	<!--JUMBOTRON-->
	<div class="container-fluid">
		<div class="row jumbotron" style="background-color: #fff;">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-12">
				<p class="display-4" style="font-size: 40px; text-align: center;"><i>Podium freelancing website is the best option for you, come join our community</i></p>
			</div>
		</div>
	</div>

	<!--FOOTER-->

		<!-- Remove the container if you want to extend the Footer to full width. -->
		<div class="my-5">
		<!-- Footer -->
		<footer class="text-center text-white" style="background-color: #65453A">
			<!-- Grid container -->
			<div>
			<!-- Section: Links -->
			<section class="mt-5">
				<!-- Grid row-->
				<div class="row text-center justify-content-center pt-5">
				<!-- Grid column -->
				<div class="col-md-2">
					<h6 class="text-uppercase font-weight-bold">
					<a href="#!" class="text-white">Home</a>
					</h6>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-2">
					<h6 class="text-uppercase font-weight-bold">
					<a href="#!" class="text-white">About</a>
					</h6>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-2">
					<h6 class="text-uppercase font-weight-bold">
					<a href="#!" class="text-white">Contact</a>
					</h6>
				</div>
				<!-- Grid column -->
				</div>
				<!-- Grid row-->
			</section>
			<!-- Section: Links -->

			<!-- Section: Social -->
			<section class="text-center mb-5">
				<a href="" class="text-white me-4">
				<i class="fab fa-facebook-f"></i>
				</a>
				<a href="" class="text-white me-4">
				<i class="fab fa-twitter"></i>
				</a>
				<a href="" class="text-white me-4">
				<i class="fab fa-google"></i>
				</a>
				<a href="" class="text-white me-4">
				<i class="fab fa-instagram"></i>
				</a>
				<a href="" class="text-white me-4">
				<i class="fab fa-linkedin"></i>
				</a>
				<a href="" class="text-white me-4">
				<i class="fab fa-github"></i>
				</a>
			</section>
			<!-- Section: Social -->
			</div>
			<!-- Grid container -->
			<hr class="my-5" />
			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
			All rights reserved | Podium Freelancing Website 2022
			</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->
		</div>
		<!-- End of .container -->

</body>
</html>