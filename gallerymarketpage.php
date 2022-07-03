<!doctype html>
<html lang="en">

<head>
    <title>Gallery Market Page </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/gallerymarketpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a7db501430.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
		include 'include/navbarnew.php';
	?>

    <!--Breadcrumbs-->

    <!---End of Navbar-->
    <!---Side bar-->
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div>
                        <aside class="side-area product-side side-shadow mt-5">
                            <div class="side-title">
                                <h3>Categories</h3>

                            </div>
                            <div class="side-content">
                                <ul class="list">
                                    <p></p>
                                    <li>

                                        <div class="items">
                                            <a href="gallerymarketpage.html"><span class="item"
                                                    data-name="all">All</span></a>
                                            <br>
                                            <br>
                                            <a href=""><span class="item" data-name="painting">Painting</span></a>
                                            <br>
                                            <br>
                                            <a href=""><span class="item" data-name="drawing">Drawing</span></a>
                                            <br>
                                            <br>
                                            <a href=""><span class="item" data-name="digitalart">Digital Art</span></a>


                                        </div>

                                </ul>

                                <div>
                                    <br>
                                </div>

                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-top d-flex justify-content-between align-items-center">
                                <div class="product-sec product-item">
                                    <h2 class="my-5">Gallery Market</h2>
                                </div>
                            </div>
                        </div>


                        <div class="container">

                            <h3 class="title"> organic products </h3>

                            <div class="products-container">


                                <div class="col-sm-6">
                                    <div class="product" data-name="p-1">
                                        <!-- <img src="img/art1.jpg" alt="">-->
                                        <h3>Oil Painting</h3>
                                        <div class="price">$2.00</div>
                                        <li><a href=""><i class="fa-brands fa-facebook"></i></a> John Doe</li>
                                        <li><a href=""><i class="fa-brands fa-instagram-square"></i></a> John Doe</li>
                                    </div>
                                </div>
                                

                            </div>


                        </div>

                        <div class="products-preview">

                            <div class="preview" data-target="p-1">
                                <i class="fas fa-times"></i>
                                <img src="img/art1.jpg" alt="">
                                <h3>Oil Painting</h3>
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
                                    <a href="#" class="description">Go to Description Page</a>
                                </div>
                            </div>



                </div>

</body>

</html>
<!----->






<script type="text/javascript">
    let preveiwContainer = document.querySelector('.products-preview');
    let previewBox = preveiwContainer.querySelectorAll('.preview');

    document.querySelectorAll('.products-container .product').forEach(product => {
        product.onclick = () => {
            preveiwContainer.style.display = 'flex';
            let name = product.getAttribute('data-name');
            previewBox.forEach(preview => {
                let target = preview.getAttribute('data-target');
                if (name == target) {
                    preview.classList.add('active');
                }
            });
        };
    });

    previewBox.forEach(close => {
        close.querySelector('.fa-times').onclick = () => {
            close.classList.remove('active');
            preveiwContainer.style.display = 'none';
        };
    });
</script>











<script src="gallerymarketpage.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>