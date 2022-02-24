<?php
    session_start();
    
    if(isset($_POST["list-now"])) {

        require 'db.php';

        $title = $_POST["titleAnn"];
        $platform = $_POST["platformAnn"];
        $server = $_POST["serverAnn"];
        $info = $_POST["moreInfoAnn"];
        $buyOption = $_POST["optionBuyAnn"];
        $quantity = $_POST["qunatityAnn"];
        $insurance = $_POST["insuranceAnn"];
        $price = $_POST["priceAnn"];
        $usernameId = $_SESSION['userId'];

        if(empty($title)) {
            header("Location: ../sell_now.php?error=empty_case(s)");
            exit();
        } else if(strlen($title) > 25) {
            header("Location: ../sell_now.php?error=title_too_long");
            exit();
        } else if (strlen($info) > 250) {
            header("Location: ../sell_now.php?error=info_too_long");
            exit();
        } else {
            
            $sql = "INSERT INTO announce (idUser, title, platform, serverN, moreInfo, buyOption, quantity, insurance, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_bind_param($stmt, "isssssiii", $usernameId, $title, $platform, $server, $info, $buyOption, $quantity, $insurance, $price);
            mysqli_stmt_execute($stmt);

            header("Location: ../sell_now.php?announce_create=succes");
            exit();

        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    } else {
        header("Location: ../main_page.php");
        exit();
    }

?>