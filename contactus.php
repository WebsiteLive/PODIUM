<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/contactus.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,700" rel="stylesheet">
</head>
<body>
<?php
		include 'include/finalnavbar.php';
	?>

    <div class="container">
        <div class="header">
            <br><br>
            <h3>CONTACT US</h3>
            <h4>Feel free to leave a message</h4>
        </div>
        <div class="contact">
            <form action="#" method="post">
                <label for="name">Name : </label> 
                <input type="text" name="name" placeholder="  Enter Name" size="50" required=""> <br><br>
                <label for="email">Email : </label> 
                <input type="email" name="email" placeholder="  Enter Email Address" size="50" required=""> <br><br>
                <label for="">Message :</label>
                <textarea name="form-control" id="" cols="50" rows="7" placeholder="Enter Message"></textarea>
                
                <br><br>
                <button type="submit">SUBMIT</button>
                <br><br>
            </form>
        </div>

    </div>
</body>
</html>