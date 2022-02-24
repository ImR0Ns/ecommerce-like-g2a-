<?php

    session_start();
    
    if(isset($_POST["send_now"])) {

        require 'db.php';

        $usernameId = $_SESSION['userId'];
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $cVer = $_POST["cVer"];
        $cityV = $_POST["cityV"];
        $aVer = $_POST["aVer"];
        $postalC = $_POST["postalC"];


        if(empty($fName) || empty($lName) || empty($cVer) || empty($cityV) || empty($aVer) || empty($postalC)) {
            header("Location: ../zeodon_settings_idverif.php?error=empty_case(s)");
            exit();
        } else {
            
            $sql = "INSERT INTO idverif (idUser, fName, lName, cVer, cityV, aVer, postalC) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_bind_param($stmt, "issssss", $usernameId, $fName, $lName, $cVer, $cityV , $aVer, $postalC);
            mysqli_stmt_execute($stmt);

            header("Location: ../zeodon_settings_idverif.php?send_with_success");
            exit();

        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    } else {
        header("Location: ../main_page.php");
        exit();
    }

?>