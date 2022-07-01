<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Personal Information</title>
  <link rel="stylesheet" href="information.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/02f5c84312.js" crossorigin="anonymous"></script>
</head>

<body>
  <section id="">
  <div class="div-body">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navi-bar">
      <span class="dot"></span>
      <!--------<img class="podium-logo" src="" alt="">---->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Togglenavigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="header-item">
                <div class="dropdown">
                <button class="button-cta btn btn-sm btn-primary dropdown-toggle" type="button" href="" id="" data-toggle="dropdown">Account<span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="drop"><a href="">Log-In</a></li>
                    <hr>
                    <li class="drop"><a href="">Sign-Up</a></li>
                  </ul>
                </div>
            </li>
            <li class="header-item">
                <button class="button-cta btn btn-sm btn-info about" type="button" href="">Gallery Market</button>
            </li>
            <li class="header-item">
                <button class="button-cta btn btn-sm btn-info about" type="button" href="">Freelance Page</button>
            </li>
            <li class="header-item">
              <button class="button-cta btn btn-sm btn-info about" type="button" href="">About</button>
            </li>
            <li class="header-item">
              <button class="button-cta btn btn-sm btn-info contacts" type="button" href="">Contacts</button>
            </li>
            <li class="header-item">
                <button class="button-cta btn btn-sm btn-info home" type="button" href="">Home</button>
            </li>
        </ul>
      </div>
    </nav>

    <!-- Title -->
    <div class="container header">
        <div class="column">
          <h1>Personal Information</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere fermentum justo, ac ultrices erat fermentum non. Nam in imperdiet nunc. Nam in massa laoreet, condimentum arcu sit amet, suscipit quam. </p>
          <hr class="solid">
          <div class="div-form">
            <form class="forms" action="" method="post">
            <label class="picture"><strong>Profile Picture: </strong></label>
            <button class="dot2" id="dot2"><strong>+</strong></button>
            <label class="name" for="text"><strong>Name: </strong></label>
            <input class="text-name" type="text" id="name" placeholder="Enter your first name" name="name">
            <input class="text-name2" type="text" id="name" placeholder="Enter your last name" name="name">
            <label class="years-exp" for="text"><strong>Year(s) of Experience: </strong></label>
            <input class="yrs-exp" type="number" id="years-exp" name="years">
            <label class="description" for="text"><strong>Description: </strong> </label>
            <textarea class="text-area" rows="5" cols="55" placeholder="Enter description"></textarea>
            </form>
          </div>
          <hr class="solid2">
        </div>
        <h1><center>PORTFOLIO</center></h1>
        <p><center>Upload your Projects</center></p>
        <div class="gallery">
            <div class="dropdown">
                <button class="btn dropdown-toggle gallery-file" data-toggle="dropdown"><i class="fa fa-upload"> Add New</i></button>
                <ul class="dropdown-menu">
                    <li class="drop"><a href="">Add new file</a></li>
                    <hr>
                    <li class="drop"><a href="">Add new folder</a></li>
                </ul>
            </div>
            <input class="sub" type="submit"><a href=""></a> 
        </div>
    </div>
  </div>
  </section>
</body>

</html>
