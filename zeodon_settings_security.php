<?php

    session_start();
    require("./php_files/db.php");

    $idUs = $_SESSION['userId'];

    $sql = "SELECT * FROM security WHERE idUser = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i", $idUs);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=de
    vice-width, initial-scale=1.0">
    <title>Zeodon | Home</title>
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

    <link rel="stylesheet" href="./css/zeodon_settings.css?v=<?php echo time(); ?>">

    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

</head>

<body>
<?php
    if(isset($_SESSION["userId"])) {
    ?>
    <div class="container posR">

        <img src="./img/img_zeodon_settings/zeodon_sec_img.png" alt="" class="imgIdVerINP">
        <div class="securityBgD"></div>
        <p class="titleSecSett">Security</p>
        <p class="subTitleSecSett">here you can manage your account security</p>
        
        <p class="secGeneralSett">General</p>
        
        <p class="usernameSecurity">Username <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo $_SESSION['userName']; ?></span></p>
        <p class="passwordSecurity">Password <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo "*******" ?></span></p>
        <p class="firstNameSecurity">First name <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo $row['firstName']; ?></span></p>
        <p class="lastNameSecurity">Last name <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo $row['lastName']; ?></span></p>
        <p class="countrySecurity">Country <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo $row['country']; ?></span></p>
        <p class="citySecurity">City <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo $row['city']; ?></span></p>
        <p class="addressSecurity">Address <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo $row['address']; ?></span></p>
        <p class="phoneNumberSec">Phone number <span style="color: #B3B3B3; margin: 0px 0px 0px 150px;"><?php echo "-" ?></span></p>

        <img src="./img/img_zeodon_settings/zeodon_semn_app.png" alt="" class="semnAtentieApp">
        <p class="textZeodonSemnApp">Attention! <span style="color: #8E54E9;">2FA</span> is disabled, please activate it as soon as possible for a higher level of security</p>

        <p class="faAccCode">2FA code</p>
        <div class="bg2faCodee"></div>
        <p class="actuallycode2FAAcc">523715</p>

        <p class="faForCCC">2FA</p>
        <p class="faMethodsChestie">2FA methods</p>
        <p class="securityLevelFA">Security level</p>

        <button class="buttforfaForCCC">activate</button>
        <button class="buttforfaMethodsChestie">email</button>
        <button class="buttforsecurityLevelFA">Strong</button>

    </div>
    <?php
        } else {
          header("Location: ../zeodon/log_in.php?error=no_user");
          exit();
        }
      ?>
</body>

</html>