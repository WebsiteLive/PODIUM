<?php
	session_start();
?>
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

<body class="body">
    <?php
		include 'include/finalnavbar.php';
    ?>
    <div class="row">
        <div class="col-sm-4">
            <aside class="side-area product-side side-shadow mt-5">
                <div class="side-title">
                    <h3>Categories</h3>

                </div>
                <div class="side-content">
                    <ul class="list">
                        <p></p>
                        <li>
                            <form method="post">
                                <div class="items">
                                    <a type="submit" name= "all" href=""><span class="item"
                                            data-name="all">All</span></a>
                                    <br>
                                    <br>
                                    <a type="submit" name= "Paint" href=""><span class="item" data-name="painting">Painting</span></a>
                                    <br>
                                    <br>
                                    <a type="submit" name= "Draw" href=""><span class="item" data-name="drawing">Drawing</span></a>
                                    <br>
                                    <br>
                                    <a type="submit" name= "Digital" href=""><span class="item" data-name="digitalart">Digital Art</span></a>
                                    <?php print_r($_POST);?>

                                </div>
                            </form>
                    </ul>

                    <div>
                        <br>
                    </div>

                </div>
            </aside>
        </div>
        <div class="col-sm-8 ">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-top d-flex justify-content-between align-items-center">
                            <div class="product-sec product-item">
                                <h2 class="my-5"></h2>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <h3 class="title">Gallery Market</h3>
                        <div class="products-container">
                            <div class="row">
                                <?php
                                    include 'dbcon.php';
                                    if(!$con){
                                        header("Location: Ghost.html");
                                    }
                                    else{
                            
                                        if (!empty($result)) {
                                            if((array_key_exists('Draw', $_POST))){
                                                $query = "SELECT*FROM art_submission WHERE post_type='Sale'AND item_type='Drawing'";
                                                $result = odbc_exec($con,$query);
                                                while ($row = odbc_fetch_array($result)) {
                                                $id=$row['thread_Id'];    
                                                $title=$row['item_title'];
                                                $price=$row['price'];
                                                $img_url=$row['item_imgurl'];
                                                include "view_items.php";
                                            }
                                        }

                                    }
                                    
                                    
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                            include 'dbcon.php';
                            if(!$con){
                                header("Location: Ghost.html");
                            }
                            else{
                                $query = "SELECT*FROM art_submission WHERE post_type='Sale'";
                                $result = odbc_exec($con,$query);
                                        
                                        
                                if (!empty($result)) {
                                    while ($row = odbc_fetch_array($result)) {
                                    $id=$row['thread_Id'];    
                                    $title=$row['item_title'];
                                    $price=$row['price'];
                                    $img_url=$row['item_imgurl'];
                                    $desc=$row['post_description'];
                                    include "view_itemsdetails.php";
                                    }
                                    }
                                    
                                    
                                }
                                ?>
                        

                    </div>


                </div>

            </div>
        </div>
    </div>

</body>

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

</html>