<?php


if (isset($_POST['log_in-submit'])) {
    
    require 'db.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../log_in.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../log_in.php?error=sqlerror");
            exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header("Location: ../log_in.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userName'] = $row['username'];

                    header("Location: ../index.php?log_in=success");
                    exit();
                }
                else {
                    header("Location: ../log_in.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../log_in.php?error=invalid_user");
                exit();
            }
        }
        
    }

}
else {
    header("Location: ../index.php");
    exit();
}