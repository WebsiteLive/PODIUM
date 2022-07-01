<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles/finalpodium.css"> 
	<!--customized css file link-->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css"> 
	<!--fontawesome file link-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<title>HOME</title>
</head>
<body>
	<!--NAVIGATION BAR-->
	
	<?php
		include 'include/navbarnew.php';
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
				    <p><a href="#">Join Us Now!</a></p>
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
	<center>
	<footer class="page-footer font-small cyan darken-3" style="background-color: #FEEEE2; padding: 30px;">

	  <!-- Footer Elements -->
	  <div class="container">

	    <!-- Grid row-->
	    <div class="row">

	      <!-- Grid column -->
	      <div class="col-md-12">
			 <div class="display-flex" style="margin-bottom: 40px; padding-left: 70px; padding-right:120px ">
	        	<a href="#" style="color: #000000; padding-right: 65px;text-decoration: none; font-size: 20px;">Home</a>
	        	<a href="#" style="color: #000000; padding: 50px; text-decoration: none; font-size: 20px;">Contact</a>
	        	<a href="#" style="color: #000000; padding-left: 70px; text-decoration: none; font-size: 20px;">About</a>
	        </div>
	        <div class="mb-5">
	          <!-- Facebook -->
	          <a class="fb-ic">
	            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
	          </a>
	          <!--Linkedin -->
	          <a class="li-ic">
	            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
	          </a>
	          <!--Instagram-->
	          <a class="ins-ic">
	            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
	          </a>
	          <div class="horizontal"></div>
	      </div>
	      <!-- Grid column -->
		
	    </div>
	    <!-- Grid row-->
		
	  </div>
	  <!-- Footer Elements -->
	  
	  <!-- Copyright -->
	  <div class="footer-copyright text-center" style="padding-right: 50px; margin-bottom: 10px; margin-top: -30px;">All rights reserved | Podium Freelancing Website 2022
	  </div>
	  <!-- Copyright -->

	</footer>
	</center>
</body>
</html>