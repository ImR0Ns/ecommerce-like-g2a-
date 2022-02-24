<?php
    session_start();
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

    <link rel="stylesheet" href="./css/zeodon_login.css?v=<?php echo time(); ?>">
    <script src="./js/bara-search.js?v=<?php echo time(); ?>"></script>
    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

</head>

<body>
    <?php
        if(isset($_SESSION["userId"])) {
            header("Location: ../index.php");
            exit();
        } else {
        ?>
    <div class="container posR">
        <?php
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyfields") {
                    echo '<p class="errors">Error: Fill both cases!</p>';
                } else if($_GET["error"] == "wrongpwd") {
                    echo '<p class="errors">Error: Wrong password!</p>';
                } else if($_GET["error"] == "invalid_user") { 
                    echo '<p class="errors">Error: Invalid user!</p>';
                }
            }
        ?>
        <img src="./img/img_zeodon_login/Group 1logo zeodon.png" alt="" class="logoAici">
        <a href="" class="titleChestieN">Zeodon</a>
        <p class="zeodonSubTitle">Zeodon</p>
        <p class="SubSubTitle">You’re best marketplace.</p>

        <div class="caseLogIn"></div>
        <p class="logIn">Log in</p>
        <form action="./php_files/login.php" method="post">
            <input type="text" name="mailuid" id="" class="email">
            <input type="password" name="pwd" id="" class="password">
            <input type="submit" value="Log in" class="logInButt" name="log_in-submit">
        </form>
        <p class="userNameForPlace">Username</p>
        <p class="passwordForPlace">Password</p>
        <a href="" class="forgotPassword">Forgot Password?</a>
        <p class="connUsingCC">Connect using</p>
        <p class="newMemberChestie">New member? <span style="color: #1e90ff;">Sign up</span></p>
        <img src="./img/img_zeodon_login/undraw_Online_shopping_re_k1sv 1chestiecutableta.png" alt="" class="imgChestienN">
        
        <div class="fbST">
            <div class="bgForFB"></div>
            <i class="fab fa-facebook-f fbT"></i>
            <p class="fbTT">Sign up using Facebook</p>
        </div>
        <div class="fbSTS">
            <div class="bgForFB"></div>
            <i class="fab fa-google fbT2"></i>
            <p class="fbTT2">Sign up using Google</p>
        </div>
        <div class="fbSTU">
            <div class="bgForFB"></div>
            <i class="fab fa-steam-symbol fbT3"></i>
            <p class="fbTT3">Sign up using Steam</p>
        </div>

    </div>
    <?php
        }
      ?>
</body>

</html>