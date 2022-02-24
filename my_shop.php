<?php
    session_start();
    
    require("./php_files/db.php");

    $idUs = $_SESSION['userId'];

    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i", $idUs);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
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
    <script src="./js/bara-stanga.js?v=<?php echo time(); ?>"></script>
    <script src="./js/bara-search.js?v=<?php echo time(); ?>"></script>


    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

    <script>

    </script>

</head>

<body>
<?php
        if(isset($_SESSION["userId"])) {
          ?>
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

            <!--bara ascunsa-->
            <div class="baraceaoaresuidispare">
                <div class="oimagineneagraaici"></div>
                <div class="bgBaraAscunsa"></div>
                <p class="laBaraUser">NexD</p>
                <p class="subTitleCc">EXPLORE</p>
                <div class="linileealea"></div>
                <div class="imgIcc"></div>
                <p class="imgIccTT">View Profile </p>
                <p class="siSageataCC"><i class="fas fa-arrow-right fa-lg"></i></p>
                <div style="position: absolute; top: 70px; left: 0px;">
                    <div class="linileealea2"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT2">View Profile </p>
                    <p class="siSageataCC2"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>
                <div style="position: absolute; top: 140px; left: 0px;">
                    <div class="linileealea3"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT3">View Profile </p>
                    <p class="siSageataCC3"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>
                <div style="position: absolute; top: 210px; left: 0px;">
                    <div class="linileealea4"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT4">View Profile </p>
                    <p class="siSageataCC4"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>
                <div style="position: absolute; top: 280px; left: 0px;">
                    <div class="linileealea5"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT5">View Profile </p>
                    <p class="siSageataCC5"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>

                <p class="helpTitleBB">HELP</p>
                <div style="position: absolute; top: 610px; left: 0px;">
                    <div class="linileealea6"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT6">Settings</p>
                    <p class="siSageataCC6"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>
                <div style="position: absolute; top: 680px; left: 0px;">
                    <div class="linileealea7"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT7">Languages </p>
                    <p class="siSageataCC7"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>
                <div style="position: absolute; top: 750px; left: 0px;">
                    <div class="linileealea8"></div>
                    <div class="imgIcc"></div>
                    <p class="imgIccTT8">Sign out </p>
                    <p class="siSageataCC8"><i class="fas fa-arrow-right fa-lg"></i></p>
                </div>
                
                <p class="oBalChestie">Balance <span style="margin-left: 100px;">20$</span></p>
                <p class="balancegoldjosdreapta">GOLD <span style="margin-left: 126px;">0</span></p>

            </div>
            <!--bara ascunsa-->

        </header>

        <img src="./img/img_zeodon_myshop/zeodon_myshop.png" alt="" class="worningTextS">
        <p class="textWorning">Zeodon Protection activated <span class="forInfoCC">info</span></p>

            <select class="sortBybUTT" id="mySelect" onchange="myFunction()">
                <option value="0" disabled selected>Sort by</option>
                <option value="1">Highest price</option>
                <option value="2">Lowest Price</option>
                <option value="3">Most Recent</option>
                <option value="4">Most popular</option>
                <option value="5">Discount</option>
            </select>
            <script>
                function myFunction() {
                    var x = document.getElementById("mySelect").value;
                    
                }
            </script>

        <select class="filterByButt">
            <option value="" disabled selected>Filter</option>
            <option value="">Game</option>
            <option value="">Server</option>
            <option value="">Device</option>
            <option value="">Region</option>
            <option value="">Delivery method</option>
        </select>
        <p class="nameUserShop"><span style="font-weight: 600;"><?php echo $row["username"]; ?></span> shop</p>

        <p class="categoriesTitl">Categories</p>

        <button class="accountBut">Accounts</button>
        <button class="boostingBut">Boosting</button>
        <button class="topUpBut">Top up</button>
        <button class="itemsBut">Items</button>
        <button class="casesBut">Cases</button>
        <button class="chestieBut">Chestie</button>


        <div class="row">
            <?php
                $sql = "SELECT * FROM announce WHERE idUser = ? ";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "i", $idUs);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                ?>
                <p class="resultsFoundBuBut"><?php echo mysqli_num_rows($result);?> Results found</p>
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
                        <button class="buyNowCaseT">Buy now</button>
                        </div></div>';
                    }
                }

            ?>
        </div>

    </div>
    <?php
        } else {
          header("Location: ../zeodon/log_in.php?error=no_user");
          exit();
        }
      ?>
</body>

</html>
