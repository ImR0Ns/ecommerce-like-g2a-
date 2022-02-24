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
            header("Location: ../zeodon/forget_pass.php?error=invalid_link");
            exit();
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                <img src="./img/Group 1toatapartestanga.png" alt="" class="imgStangaSus">
                        <h1 class="titleZeodonCreatePass">Zeodon</h1>
                        <p class="letsCreateNew">Let’s create a new password !</p>
                        <p class="typeANew">Type a new password that you will easily remember. Also, don’t foget to add some extra caracthers, numbers and at least one uppercase letter and one lower for a better account security :)</p>
                        <form action="./php_files/reset-password.inc.php" method="post">
                            <input type="hidden" name="selector" id="" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" id=""  value="<?php echo $validator; ?>">
                            <input type="password" name="pwd" id="pwdSee" class="newPassCreate" >
                            <input type="password" name="pwd-repeat" id="pwdSee2" class="confirmNewPassCreate" >
                            <input type="submit" value="Finish" class="finishButtCreatePass" name="reset-password-submit">
                        </form>

                <p class="passwordPlaceHolder">Password</p>
                <p class="passwordConfirmPlaceHolder">Confirm password</p>
                <p class="uppercaseLetters"><i class="fas fa-times"></i> Uppercase letters</p>
                <p class="specialCharacters"><i class="fas fa-times"></i> Special caracthers (@, #, $, !, ? etc )</p>
                <p class="atLeastOnEnR"><i class="fas fa-times"></i> At least one number</p>
                <div class="eye"><i class="fas fa-eye fa-2x"></i></div>

                <div class="barLoading"></div>
                <div class="loadedThing"></div>

        <?php
            }
        }
    ?>
    </div>
</body>

</html>