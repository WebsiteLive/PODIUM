<?php
  
?>
<!DOCTYPE html><html>
<head>
    <title>PODIUM</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body class="body">
<?php
		include 'include/finalnavbar.php';
	?>
<div class="container ">

  <div class="row justify-content-center">
    <div class="col-sm-4 signup_form">
      <h2>Sign Up</h2>
      <form action="signup.php" method="post">
      <div class="sec1" hidden>
      <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="form_input" name="email">
          <small  class="form-text text-muted">email</small>
        </div> 
        <div class="form-group">
          <label for="username">User Name:</label>
          <input type="text" class="form-control" id="form_input" >
        </div>  
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="form_input" >
        </div> 
        <div class="form-group">
          <label for="confirmpass">Confirm Password:</label>
          <input type="password" class="form-control conf_pass" id="form_input" >
        </div> 
        <button type="submit" class="signup_btn align-self-center">Next</button>
        </div>
        <div class="sec2" >
        <h3>Personal Information</h3>
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" id="form_input" name="fname">
        </div>
        <div class="form-group">
          <label for="mname">Middle Name:</label>
          <input type="text" class="form-control" id="form_input" name="mname">
        </div>
        <div class="form-group">
          <label for="lname">Last Name:</label>
          <input type="text" class="form-control" id="form_input" name="lname">
        </div>  
        <div class="form-group">
          <label for="extname">Name Extension:</label>
          <input type="text" class="form-control" id="form_input" name="extname">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="form_input" name="address">
        </div>
        <div class="form-group">
          <label for="bday">Date of Birth:</label>
          <input type="date" class="form-control" id="form_input" name="bday">
        </div>
        <button type="submit" class="signup_btn align-self-center">Sign Up</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
</html>