<?php
if (isset($_POST['reg_user'])) {

    require 'db.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password_1'];
    $passwordRepeat = $_POST['password_2'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipCode = $_POST['zipCode'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($firstName) || empty($lastName) || empty($country) || empty($city) || empty($address) || empty($zipCode)) {
        header("Location: ../sign_up.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    } else if (strlen($username) <  3) {
        header("Location: ../sign_up.php?error=short_username=".$username."");
        exit();
    } else if (strlen($username) > 17) {
        header("Location: ../sign_up.php?error=long_username=".$username."");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../sign_up.php?error=invalidmailuid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../sign_up.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../sign_up.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../sign_up.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {
        
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../sign_up.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../sign_up.php?error=usertaken&mail=".$email);
                exit();
            }
            else {
                
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../sign_up.php?error=sqlerror");
                    exit();
                }
                else {

                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    
                    $img_file_name = "default";
                    $about = "Welcome to Zeodon (default)";
                    $orders = 0;
                    $reviews = 0;

                    $gold = 0;
                    $videoSenn = 0;
                    $dailyQuestsCompleted = 0;
                    $offersComple = 0;
                    $goldByAff = 0;
                    $goldTrans = 0;
                    $balanceGold = 0;
                    $createLinkAff = "www.zeodon.com/gold-affiliates/".$username."";

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    $lastId = mysqli_insert_id($conn);

                    $sql = "INSERT INTO security (idUser, firstName, lastName, country, city, address, zipcode) VALUES (?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "issssss", $lastId, $firstName, $lastName, $country, $city, $address, $zipCode);
                    mysqli_stmt_execute($stmt);

                    

                    $sql = "INSERT INTO zeodongold(idUser, gold, videoSenn, dailyQuestsCompleted, offersComple, goldByAff, goldTrans, balanceGold, affLink) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "iiiiiiiis", $lastId, $videoSenn, $gold, $dailyQuestsCompleted, $offersComple, $goldByAff, $goldTrans, $balanceGold, $createLinkAff);
                    mysqli_stmt_execute($stmt);

                    $sql = "INSERT INTO detailsprofile(userId, imgfilename, about, orders, reviews) VALUES(?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "issss", $lastId, $img_file_name, $about, $orders, $reviews);
                    mysqli_stmt_execute($stmt);

                    header("Location: ../sign_up.php?signup=succes");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../sign_up.php");
    exit();
}