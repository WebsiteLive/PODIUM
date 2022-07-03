<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <div class="user">
        <img src="images/profile.jpg" alt="">
        <h3 class="name">Adrian Pulao</h3>
        <p class="position">Digital Artist</p>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#back">Back</a></li>
        </ul>
    </nav>
    </header>
    <div id="menu" class="fas fa-bars"></div>

    <section class="home" id="home">

        <h3>HI THERE!</h3>
        <h1>I'm <span>Adrian Pulao</span></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae explicabo cupiditate in aliquam assumenda, saepe necessitatibus dignissimos dolore molestias distinctio! Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
    </section>
    <section class="about" id="about">

        <h1 class="heading"><span>About Me</span></h1>
        <div class="row">
            <div class="info">
                <h3><span>Name: </span>Adrian Pulao</h3>
                <h3><span>Age: </span>20</h3>
                <h3><span>Qualification: </span>BMS</h3>
                <h3><span>Position: </span>Front End Web Developer</h3>
                <h3><span>Language: </span>Tagalog/Englsih</h3>
            </div>
        </div>
    </section>
   
    <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>My Portfolio</span></h1>

        <div class="container">

        <div class="products-container">

         <div class="product" data-name="p-1">
            <img src="images/img1.jpg" alt="">
            <h3>strawberries</h3>
            <div class="price">$2.00</div>
         </div>

         <div class="product" data-name="p-2">
            <img src="images/dibil.png" alt="">
            <h3>Upload File</h3>
         </div>

        
        </div>

        </div>

   <div class="products-preview">

      <div class="preview" data-target="p-1">
         <i class="fas fa-times"></i>
         <img src="images/img1.jpg" alt="">
         <h3>organic strawberries</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
      </div>

      <div class="preview" data-target="p-2">
         <i class="fas fa-times"></i>
         <form class="upload" style="display: block;">
             <input type="file" name="">
             <br>
             <br>
             <label>Type</label>
             <input type="text" name="">
             <br>
             <label>Dimension</label>
             <input type="text" name="">

             <h3 style="font-size: 20px;">Choose For Sale or For Commission</h3>
             <input type="radio" id="Sale" name="fav_language">
              <label for="Sale">For Sale</label><br>
              <input type="radio" id="Commission" name="fav_language">
              <label for="Commission">For Commission</label><br><br>
              <label>Description</label><br>
              <input type="textarea" name="" placeholder="Describe your art work..."><br><br>
              <label>Caption</label><br>
              <input type="textarea" name="" placeholder="Insert your tagline..."><br><br>
              <label>Price</label>
              <input type="textarea" name="" placeholder="₱">
         </form>
         <div class="buttons">
            <a href="#" class="buy">Submit</a>
         </div>
      </div>

      <div class="preview" data-target="p-3">
         <i class="fas fa-times"></i>
         <img src="images/3.png" alt="">
         <h3>organic tomatoes</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-4">
         <i class="fas fa-times"></i>
         <img src="images/4.png" alt="">
         <h3>organic brinjal</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-5">
         <i class="fas fa-times"></i>
         <img src="images/5.png" alt="">
         <h3>organic broccoli</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-6">
         <i class="fas fa-times"></i>
         <img src="images/6.png" alt="">
         <h3>organic potatoes</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
         <div class="price">$2.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>

   </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="script.js"></script>
</body>
</html>