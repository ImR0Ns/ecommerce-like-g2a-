<?php
    session_start();

    require("./php_files/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=de
    vice-width, initial-scale=1.0">
    <title>Zeodon | Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP & JQUERY -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- BOOTSTRAP & JQUERY -->

    <!-- CSS & JAVASCRIPT -->

    <link rel="stylesheet" href="./css/zeodon_cart.css">

    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

</head>

<body>
    <div class="container posR">
        <header>
            <a class="navBar"><i class="fas fa-bars fa-2x"></i></a>
            <a href="./index.html" class="title">Zeodon</a>
            <a class="lupaSearch"><i class="fas fa-search fa-2x"></i></a>
            <div class="baraHeader"></div>
        </header>

            <p class="cartT">Cart</p>
            <p class="hereYouFind">Here you find the items that are waiting for you</p>

            <p class="productA">PRODUCT</p>
            <p class="sellerA">SELLER</p>
            <p class="quantityA">QUANTITY</p>
            <p class="priceA">PRICE</p>
            <div class="linieUnu"></div>

        <div class="row">
            <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $sql = "SELECT * FROM announce";

                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['idAnn'] == $id){
                                    $total = $total + (int)$row['price'];
                                    echo '<h1>'.$row["title"].'</h1>';
                                    echo $total;
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>
        </div>

    </div>
</body>

</html>