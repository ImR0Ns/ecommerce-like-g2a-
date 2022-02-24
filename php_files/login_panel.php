<?php


if (isset($_POST['log_in_panel'])) {
    
    require 'db.php';

    $mailuid = $_POST['userPanId'];
    $password = $_POST['pwdPanel'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../admin_panel.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM panelzeodon WHERE userNamePanel=? ;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin_panel.php?error=sqlerror");
            exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                if ($row["adminPassword"] === $password) {
                    session_start();
                    $_SESSION['adminName'] = $row['userNamePanel'];

                    header("Location: ../the_panel.php");
                    exit();

                } else {
                    header("Location: ../admin_panel.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../admin_panel.php?error=nouser=".$mailuid."");
                exit();
            }
        }
        
    }

}
else {
    header("Location: ../main_page.php");
    exit();
}