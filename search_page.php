<?php

    session_start();

    require("./php_files/db.php");

    if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "product_id");
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'search_page.php'</script>";
            }else{
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
            }
    
        }else{
    
            $item_array = array(
                    'product_id' => $_POST['product_id']
            );
    
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=de
    vice-width, initial-scale=1.0">
    <title>Zeodon | Home</title>
    <!-- BOOTSTRAP & JQUERY -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
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

    <link rel="stylesheet" href="./css/zeodon_search_bar.css?v=<?php echo time(); ?>">
    <script src="./js/bara-search.js?v=<?php echo time(); ?>"></script>
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
            <div class="realSearchBarChestie">
                <form action="./search_page.php" method="get">
                    <input type="text" name="q" id="" class="baraSPtCautare" placeholder="Search ... ">
                    <button type="submit" class="ptSubmitCautare"><i class="fas fa-search fa-2x"></i></button>
                </form>
            </div>
            <div class="baraHeader"></div>
        </header>
        <div class="row">
            <?php
            if (!isset($_GET["q"])) {
                echo "";
            } else {
                $res = "%{$_GET["q"]}%";
                $sql = "SELECT * FROM announce WHERE title LIKE ? ";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $res);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                ?>
                <p class="resultsFoundBuBut"><?php echo mysqli_num_rows($result);?> Results found for <span stlye="color: #1e90ff;"><?php echo $_GET["q"];?></span></p>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-12" style="margin-top: 300px;"><a href="./page.php?annId=' . $row["idAnn"] . '"><div class="caseSSs">
                        <div class="bgForCaseT"></div>
                        <img src="" alt="" class="imgForCaseT">
                        <p class="titleForCaseT">'.$row["title"].'</p>
                        <p class="subTitleForCaseT">'.$row["moreInfo"].'</p>
                        <p class="priceForCaseT">'.$row["price"].' $</p>
                        <p class="daysForCaseT">'.$row["insurance"].' days</p>
                        <p class="insurcanceCaseT">Zeodon Insurance</p>
                        <p class="aboutZedonCaseT">About</p>
                        <p class="forAboutZeodonT">Quantity '.$row["quantity"].'</p>
                        </div></a>
                        <div class="caseSSs">
                        <form action="search_page.php" method="post">
                        <input type="hidden" name="product_id" value='.$row["idAnn"].'>
                        <button class="buyNowCaseT" type="submit" name="add">Buy now</button>
                        </form>
                        </div></div>';
                    }
                }

            }
            ?>
        </div>
    </div>
</body>

</html>