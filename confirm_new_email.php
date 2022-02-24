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

    <link rel="stylesheet" href="./css/zeodon_createNewPass.css?v=<?php echo time(); ?>">
    <script src="./js/create_pass.js?v=<?php echo time(); ?>"></script>

    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->


</head>

<body>
    <div class="container posR">
    <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            header("Location: ../zeodon/forgot_email.php?error=invalid_link");
            exit();
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {

                $currentDate = date("U");

                require './php_files/db.php';

                $sql = "SELECT * FROM emailreset WHERE emResetSelector=? AND emResetExpires >= ?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "There was an error!";
                exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);

                    if(!$row = mysqli_fetch_assoc($result)) {
                        echo "You need to re-submit your reset request.";
                        exit();
                    } else {

                        $tokenBin = hex2bin($validator);
                        $tokenCheck = password_verify($tokenBin, $row["emResetToken"]);
                        
                        if($tokenCheck === false) {
                            echo "You need to re-submit your reset request.";
                            exit();
                        } elseif ($tokenCheck === true) {

                            $tokenEmail = $row['emResetEmail'];
                            $usercc = $row["newEmail"];

                            $sql =  "SELECT * FROM users WHERE username=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an error!";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, "s", $usercc);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                                if (!$row = mysqli_fetch_assoc($result)) {
                                    echo " You need to re-submit your reset request.";
                                    exit();
                                } else {
                                    $sql = "UPDATE users SET email=? WHERE username=?";
                                    $stmt = mysqli_stmt_init($conn);
                                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    echo "There was an error!";
                                    exit();
                                    } else {

                                        mysqli_stmt_bind_param($stmt, "ss", $tokenEmail, $usercc);
                                        mysqli_stmt_execute($stmt);

                                        $sql = "DELETE FROM emailReset WHERE emResetEmail=?";
                                        $stmt = mysqli_stmt_init($conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                            echo "There was an error!";
                                            exit();
                                        } else {
                                            mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                            mysqli_stmt_execute($stmt);
                                            header("Location: ../sign_up.php?newemail=emailupdated");
                                        }
                                    }
                                }

                            }

                        }

                    }
                }

            }
        }
    ?>
    </div>
</body>

</html>