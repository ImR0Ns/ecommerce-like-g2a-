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

    <link rel="stylesheet" href="./css/zeodon_forget.css?v=<?php echo time(); ?>">

    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

</head>

<body>
    <div class="container posR">
        <img src="./img/img_forget_email/Group 5chestie_stanga.png" alt="" class="imgOneOfThis">
        <img src="./img/img_forget_email/Group 6tableta.png" alt="" class="twoOneIMgChest">
        <p class="forgetEmailTitle">Zeodon</p>
        <p class="forgetEmailSubTitle">Hard time finding your email? No problem</p>
        <p class="forgetEmailSubSubTitle">All you need to do in order to change your email si to fill up the missing details and choose a new email for your zeodon account (you will receive a confirmation mail).</p>
        <form action="./php_files/reset_email_request.php" method="post">
            <input type="text" name="username" id="" class="forgetEmailUsername">
            <input type="password" name="password" id="" class="forgetEmailPassword">
            <input type="text" name="email_one" id="" class="forgetEmailnewEmail">
            <input type="text" name="email_two" id="" class="forgetEmailrepeat">
            <p class="titleForInputUser">Username</p>
            <p class="titleForInputPassword">Password</p>
            <p class="titleForInputNewEmail">New email</p>
            <p class="titleForInputRepeat">Confirm email</p>
            <input type="submit" value="Continue" class="finalOFsTEPS" name="submit_email">
        </form>
    </div>

</body>

</html>