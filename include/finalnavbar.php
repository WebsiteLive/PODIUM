<script src="include/scripts.js"></script>
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
	
<nav class="navbar sticky-navbar navbar-expand-lg navbar-light" style="background-color: #65453A;">
		<a class="navbar-brand" href="index.php"><img src="img/logo2-1.jpg" class="logo"></a>
		<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul id="navs" class="navbar-nav ml-auto">
				<li class="nav-item" id="nav-item">
					<a class="nav-link active" href="index.php">Home</a>
				</li>
				<?php
					if(isset($_SESSION['User_Id'])){
						
						echo '<li class="nav-item"id="nav-item">
						<a class="nav-link" href="">Freelancers</a>
						</li><li class="nav-item"id="nav-item">
						<a class="nav-link" href="gallerymarketpage_new.php">Market Gallery</a>
						</li>';
					}
					else{
					
					}
				?>
				<li class="nav-item"id="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item"id="nav-item">
					<a class="nav-link" href="contactus.php">Contact</a>
				</li>
				<?php
					if(isset($_SESSION['User_Id'])){
						
						echo '<li class="nav-item"id="nav-item">
						<a class="nav-link" href="">Be a FreeLancer</a>
						</li><li class="nav-item"id="nav-item">
						<a class="nav-link" href="freelancepage.php">Account</a>
						</li>';
					}
					else{
						echo'<li class="nav-item"id="nav-item">
						<a class="nav-link" id="loginbtn" onclick="loginmodal()">Login</a>
						</li>';
					}
				?>
				
			</ul>
		</div>
        <div id="loginmodal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times</span>
                            <h5 class="modal-title">LOGIN</h5>
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="username">Email:</label><br>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label><br>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <a class="nav-link" href="signup_page.php">SIGN UP</a>
                                <input type="submit" value="LogIn">
                            </form>

                        </div>
                    </div>
        
	</nav>
	<script>

var header = document.getElementById("navs");
var btns = header.getElementsByClassName("nav-link");

console.log(btns.length);
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  console.log(current[0].className);
  this.className += " active";
  });
}
</script>