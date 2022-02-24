<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>

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

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--fontawesome-->

    <!--css & js-->

    <link rel="stylesheet" href="./css/signstyle.css">
    <script src="./js/registers.js"></script>

    <!--css & js-->

</head>

<body>
    <div class="container-fluid str">
        <img src="./img/Group 1logo_zeodon.png" alt="" class="logo"><h1 class="title">Zeodon</h1>
    </div>
    <div class="text-right butonuAla">
        <a href="" class="button_chestie">continue to zeodon</a>
    </div>
    <div class="container text-center first_checkk">
        <p class="subTitle">Create your zeodon account, it’s eazy and simple :)</p>
        <p class="subSub">Join right now the biggest gaming community</p>
        <form action="./php_files/register.php" method="post">
            <div style="margin-top: 60px;">
                <p class="forUsername">Username</p>
                <input type="text" class="userName" name="username">
            </div>
            <div style="margin-top: -15px;">
                <p class="forUsername" style="left: -200px;">Email</p>
                <input type="text" class="userName" name="email">
            </div>
            <div style="margin-top: -15px;">
                <p class="forUsername">Password</p>
                <input type="password" class="userName" name="password_1">
            </div>
            <div style="margin-top: -15px;">
                <p class="forUsername" style="left: -145px;">Confirm password</p>
                <input type="password" class="userName" name="password_2">
            </div>
            <div style="margin: 20px 0px 0px 315px; width: 0px;">
                <label class="main"><p class="forTermss">I accept the <span style="color: #1e90ff; font-weight: 600;">Terms & Conditions</span></p>
                    <input type="checkbox"> 
                    <span class="geekmark"></span> 
                </label> 
            </div>
            <a href="#" class="singupbutt">Sign up</a>
            <p class="orSingUp">Or sing up using</p>
            <button class="singFB mt-3 text-left"><i class="fab fa-facebook-f"></i> Sign up using Facebook</button></br>
            <button class="singGOO mt-3 text-left"><i class="fab fa-google"></i> Sign up using Google</button></br>
            <button class="singSte mt-3 mb-5 text-left"><i class="fab fa-steam-symbol"></i> Sign up using Steam</button>
        
        </div>

        <div class="container text-center secound_chh">
            <p class="subTitle">GG! Now you have your own zeodon account</p>
            <p class="subSub">Select what do you want to on zeodon</p>
            <div class="str">
                <div class="sellers">
                    <img src="./img/Group 2buyer.png" alt="" class="imgAiaBlana">
                    <img src="./img/Group 3pentru_albs.png" alt="" class="imgAiaBlana forS" style="display: none;">
                    <p class="buyss">Buyer</p>
                    <p class="buysss">A Buyer account is based on the ability of buying and mining GOLD. You will not have the ability to sell.</p>
                </div>
                <div class="sellers2 forS2" style="border-color: #104fac; display: none;">
                    <img src="./img/Group 3pentru_albs.png" alt="" class="imgAiaBlana3 ">
                    <p class="buyss3" style="color: #104fac;">Buyer</p>
                    <p class="buysss3" style="color: #104fac;">A Buyer account is based on the ability of buying and mining GOLD. You will not have the ability to sell.</p>
                </div>
                <div class="buyer">
                    <img src="./img/Groupseller.png" alt="" class="imgAiaBlana2">
                    <img src="./img/Groupdoialbst.png" alt="" class="imgAiaBlana2 forB" style="display: none;">
                    <p class="buyss1">Seller</p>
                    <p class="buysss2" style="width: 203.91px; margin-top: 25px">A Seller account is created as a business, where you can sell your own stuff and make money. Selecting this you will have the abilty of selling, buying and mining.</p>
                </div>
                <div class="buyer2" style="border-color: #104fac;">
                    <img src="./img/Groupdoialbst.png" alt="" class="imgAiaBlana25 ">
                    <p class="buyss12" style="color: #104fac;">Seller</p>
                    <p class="buysss22" style="width: 203.91px; margin-top: 25px; color: #104fac;">A Seller account is created as a business, where you can sell your own stuff and make money. Selecting this you will have the abilty of selling, buying and mining.</p>
                </div>
            </div>
            <div class="tils text-left">
                <p class="titlsSelc">You've selected <span class="bbb">Buyer</span></p>
                <p class="titlsWorr">Don't worry, you can always change it to <span class="bb">seller</span>*</p>
                <a href="#" class="continueButt">Continue</a>
            </div>
        </div>

        <div class="container text-center last_scs">
            <img src="./img/Vectorimg.png" alt="" class="profImg">
            <p class="nameUse">gigelfrumosu</p>
            <p class="detailss text-left">Details</p>
            <p class="text-right miss">please complete the missing cases*</p>
            <div class="row">
                <div class="col">
                    <p class="realFN text-left">Real first name</p>
                    <input type="text" class="realFNI" style="margin-left: -55px;" name="firstname">
                </div>
                <div class="col">
                    <p class="realFN text-left" style="margin-left: 25px;">Real last name</p>
                    <input type="text" class="realFNI" name="lastname">
                </div>
                <div class="col">
                    <p class="realFN text-left"style="margin-left: 50px;">Country</p>
                    <input type="text" class="realFNI" style="margin-left: 50px;" name="country">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="realFN text-left">City</p>
                    <input type="text" class="realFNI" style="margin-left: -55px;" name="city">
                </div>
                <div class="col">
                    <p class="realFN text-left" style="margin-left: 25px;" >Address</p>
                    <input type="text" class="realFNI" name="address">
                </div>
                <div class="col">
                    <p class="realFN text-left"style="margin-left: 50px;">Zip code</p>
                    <input type="text" class="realFNI" style="margin-left: 50px;" name="zipCode">
                </div>
            </div>
            <p class="idVer text-left">ID Verification</p>
            <p class="ppl text-left">People wants to buy from sellers that are verified by zeodon. Boost your sells right now !</p>
    
            <div class="str" style="margin-top: 50px;">
                <div>
                    <p class="uploadID">Upload a photo with your ID CARD</p>
                </div>
                <input type="file" name="" id="" class="fileUpp">
                <p class="optionalThing">optional*</p>
            </div>
            <div class="str" style="margin-top: 50px;">
                <div>
                    <p class="uploadID">Upload a photo with you holding your ID Card</p>
                </div>
                <input type="file" name="" id="" class="fileUpp">
                <p class="optionalThing">optional*</p>
            </div>

            <p class="ifReady">If you are ready, just press "Continue" and you're done !</p>
            <button class="contButt" name="reg_user" type="submit">Continue</button>
       </form>
    
    </div>
</body>

</html>
