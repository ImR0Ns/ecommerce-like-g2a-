<?php
    session_start();
    require("./php_files/db.php");

    if (isset($_GET["annId"])) {

        $ID = $conn->real_escape_string($_GET["annId"]);
        $sql = "SELECT * FROM announce WHERE idAnn=? ";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $ID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

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

    <!-- CSS -->

    <link rel="stylesheet" href="./css/ad_page.css?v=<?php echo time(); ?>">

    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

</head>

<body>
   
    <div class="container posR">
        <button onclick="window.history.back()" class="butonBack"> back</button>
        <div class="imgPtChestie"></div>
        
        <div>
            <div class="bgDateProfil"></div>
            <img src="./img/img_zeodon_adpage/Vectorinsurance.png" alt="" class="imgProfileUser">
            <div class="bulinaVerde"></div>
            <p class="numeleUser text-center"><?php echo $_SESSION['userName']; ?></p>
            <p class="levelUser">LVL 20</p>
            <p class="descriereAici">Hi there come visit my shop</p>
            <button class="ptShop">Shop</button>
            <button class="ptMesage">Message</button>
        </div>

        <div>
            <div class="otherDetailsBG"></div>
            <p class="otherChestieClara">Other details</p>
            <p class="platformAici">Plaftorm</p>
            <p class="siChestiaAilalta"><?php echo $row["platform"]; ?></p>
            <div class="liniePtOtherDet"></div>
            <div style="position: absolute; top: 35px; left: 0px;">
                <p class="platformAici">Delivery Method</p>
                <p class="siChestiaAilalta">Online</p>
                <div class="liniePtOtherDet"></div>
            </div>
            <div style="position: absolute; top: 70px; left: 0px;">
                <p class="platformAici">Service Type</p>
                <p class="siChestiaAilalta">Account</p>
                <div class="liniePtOtherDet"></div>
            </div>
            <div style="position: absolute; top: 110px; left: 0px;">
                <p class="platformAici">Item Type</p>
                <p class="siChestiaAilalta">Others</p>
            </div>
        </div>

        <button class="buyNowButt">Buy now</button>

        <p class="titleAnunt"><?php echo $row["title"]; ?></p>
        <p class="priceAnnounceChestie"><?php echo $row["price"]; ?></p>

        <p class="descrierePtAnunt">Description</p>
        <p class="descriereaAdev"><?php echo $row["moreInfo"]; ?></p>

        <div style="position: absolute; top: -700px; left: 0px;">
            <p class="insuranceTityle">Insurance</p>

            <div>
                <img src="./img/img_zeodon_adpage/Groupprotect.png" alt="" class="ptProtection">
                <p class="titleProtectionC">Zeodon Protection</p>
                <p class="subTitleProt">Seeing this badge means that if you buy from this user you are 100% insured and you will get your money back immediattely.</p>
            </div>
            <div style="position: absolute; top: 150px; left: 0px;">
                <img src="./img/img_zeodon_adpage/Vectorinsurance.png" alt="" class="ptProtection">
                <p class="titleProtectionC"><?php echo $row["insurance"]; ?> days insured</p>
                <p class="subTitleProt">The seller will receive his money only after the period of time he selected, in this case 30 days. This is the period of time you have to report a problem and get your money back</p>
            </div>

            <div class="oLinieAici"></div>
            <div class="oAltaLinieAici"></div>
            <div class="UnRotundAici"></div>
            <p class="UserNameSubCerc">NexD</p>

            <div>
                <p class="UnNrAiciSiaICI">300</p>
                <p class="AltAiciNumar">Sold orders</p>
            </div>
            <div style="position: absolute; left: 300px;">
                <p class="UnNrAiciSiaICI">300</p>
                <p class="AltAiciNumar">Successfull</p>
            </div>
            <div style="position: absolute; left: 580px;">
                <p class="UnNrAiciSiaICI">300</p>
                <p class="AltAiciNumar" style="left: 315px;">Canceled</p>
            </div>
            <div style="position: absolute; left: 850px;">
                <p class="UnNrAiciSiaICI">300</p>
                <p class="AltAiciNumar" style="width: 300px; left: 270px;">Positive reviews</p>
            </div>
            <div style="position: absolute; left: 1130px;">
                <p class="UnNrAiciSiaICI">300</p>
                <p class="AltAiciNumar" style="left: 345px;">Level</p>
            </div>
            <p class="ATreiaLinie"></p>

            <p class="otherFrom">Other from Nexd</p>
        </div>

    </div>
</body>

</html>