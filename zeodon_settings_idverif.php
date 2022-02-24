<?php

    session_start();

    require("./php_files/db.php");

    $idUs = $_SESSION['userId'];

    $sql = "SELECT * FROM idverif WHERE idUser = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i", $idUs);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $sql = "SELECT * FROM security WHERE idUser = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i", $idUs);
    mysqli_stmt_execute($stmt);
    $resultTwo = mysqli_stmt_get_result($stmt);
    $rowTwo = mysqli_fetch_assoc($resultTwo);

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
    if($row = mysqli_fetch_assoc($result)) {
    
        echo "Adaugat deja";

    } else if($rowTwo["idVerification"] === 1) {

        echo "Test2"; // secound rowTwo;

    }else if(isset($_SESSION["userId"])) {
    ?>    
    <div class="container posR">

        <img src="./img/img_zeodon_settings/zeodon_idver_img.png" alt="" class="imgIdVerINP">
        <div class="idVerBg"></div>
        <p class="titleIdVer">ID Verification</p>
        <p class="subTitlIdVer">verify your identity and get more customers</p>
        <p class="letUsKnow">Let's know you better</p>
        <form action="./php_files/id_verif.php" method="post">
            <input type="text" name="fName" id="" class="firstNameVer" placeholder="First name">
            <input type="text" name="lName" id="" class="lastNameVer" placeholder="Last name">
            <input type="text" name="cVer" id="" class="countryVer" placeholder="Country">
            <input type="text" name="cityV" id="" class="cityVer" placeholder="City">
            <input type="text" name="aVer" id="" class="addressVer" placeholder="Address">
            <input type="text" name="postalC" id="" class="postalCodeVer" placeholder="Postal code">

            <p class="hmmYouH">Hmm, are you a human?</p>

            <input type="file" name="" id="" class="idCardPhoto">
            <input type="file" name="" id="" class="photoHoldingIdCard">

            <button class="submitButtId" name="send_now">Submit</button>
        </form>
    </div>
    <?php
        } else {
          header("Location: ../zeodon/log_in.php?error=no_user");
          exit();
        }
      ?>
</body>

</html>