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
    <div class="container pass">
        <img src="./img/img_forget_pass/Rectangle 22imagine_stanga_sus.png" alt="" class="fImg">
        <img src="./img/img_forget_pass/Rectangle 21imagine_dreapta_jos.png" alt="" class="tImg">
        <p class="titleFPass">Zeodon</p>
        <p class="subTiteFPass">Don't remember your password?</p>
        <p class="susususb">Don’t worry, just type your associated email with zeodon or your username and we will do the rest :)</p>
        <form action="./php_files/reset-request.inc.php" method="post">
            <input type="email" name="email" id="" class="textInputEMAIL" >
            <input type="submit" value="Continue" class="sendEmailPass" name="email_sub">
        </form>
        <a href="" class="forgotEmailPP">Forgot your email?</a>
        <p class="emailPassPlaceHolder">Email / Username</p>
    </div>

</body>

</html>