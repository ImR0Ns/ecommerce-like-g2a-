<?php
    
    if(isset($_POST["ptAccept"])) {

        $user = $_POST["idUser"];
        $succes = 1;


        require 'db.php';
        
        $sql = "DELETE FROM idverif WHERE idUser=?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "i", $user);
        mysqli_stmt_execute($stmt);

        $sql = "UPDATE security SET idVerification=? WHERE idUser=?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $succes, $user);
        mysqli_stmt_execute($stmt);

        header("Location: ../the_panel.php?action=success");
        exit();

    }else if(isset($_POST["ptDecline"])) {

        require 'db.php';
        

    } else {
        header("Location: ../the_panel.php");
        exit();
    }

?>