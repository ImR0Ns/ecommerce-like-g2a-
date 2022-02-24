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

    <link rel="stylesheet" href="./css/how_to_buy.css?v=<?php echo time(); ?>">
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

        <img src="./img/img_how_to__buy/how_to_but.png" alt="" class="wirtingFTwo">

        <p class="nowIsTime" style="width: 900px;">Now you know how it works, is simple right ?</p>
        <p class="subTitleTime" style="width: 500px; left: 160px;">Let's find something for you</p>
        <button class="sellNowButtS">Explore</button>

    </div>
</body>

</html>