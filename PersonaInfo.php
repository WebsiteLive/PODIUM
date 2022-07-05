<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Personal Information</title>
  <link rel="stylesheet" href="styles/information.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/02f5c84312.js" crossorigin="anonymous"></script>
</head>
<style>
  body {
    background-color: #FEEEE2;
    font-family: monserrat;
  }

  input[type=submit],
  [type=button] {
    background-color: #D4C2B4;
    border: none;
    padding: 15px 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: none;
  }

  input[type=text] {
    border: 2px solid #aaa;
    box-sizing: border-box;
    border-radius: 5px;
    outline: none;
  }

  p {
    text-align: center;
  }

  h1 {
    font-family: monserrat;
  }
</style>

<body>

  <?php
  include 'include/finalnavbar.php';
  ?>


  <!-- Title -->
  <div class="container header">
    <div class="column">
      <h1>Personal Information</h1>
      <p>Tell us a bit about yourself. This Information will appear on your profile, so that potential buyers can get to
        know you better. </p>
      <hr class="solid">
      <div class="div-form">
        <label><strong>PROFILE PICTURE:</strong></label>

        <form class="forms" action="" method="post">

          <div class="profile-pic-div">

            <img src="img/me.jpg" id="photo">
            <input type="file" id="file">
            <label for="file" id="uploadBtn">Choose Photo</label>
          </div>

          <script src="app.js"></script>
          <label class="name" for="text"><strong>Name: </strong></label>
          <input class="text-name" type="text" id="name" placeholder="Enter your first name" name="name">
          <input class="text-name2" type="text" id="name" placeholder="Enter your last name" name="name">
          <label class="years-exp" for="text"><strong>Year(s) of Experience: </strong></label>
          <input class="yrs-exp" type="number" id="years-exp" name="years">
          <label class="description" for="text"><strong>Description: </strong> </label>
          <textarea class="text-area" rows="5" cols="55" placeholder="Enter description"></textarea>
        </form>
      </div>
    

</body>
</html>