<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=de
    vice-width, initial-scale=1.0"
    />
    <title>Zeodon | Home</title>
    <!-- BOOTSTRAP & JQUERY -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>

    <!-- BOOTSTRAP & JQUERY -->

    <!-- CSS & JAVASCRIPT -->

    <link rel="stylesheet" href="./css/profile.css" />

    <!-- CSS -->

    <!--fontawesome-->

    <script
      src="https://kit.fontawesome.com/cba30a0f7c.js"
      crossorigin="anonymous"
    ></script>

    <!--fontawesome-->
  </head>

  <body>
      <?php
        if(isset($_SESSION["userId"])) {
          ?>

          <form action="./php_files/logout.php" method="post">
            <input type="submit" value="LogOut">
          </form>

          <div class="container posR">
          <img src="./img/img_zeodon_gold/zeodon_calendar.png" alt="" class="profileImg" />
          <p class="namePage"><?php echo $_SESSION['userName']; ?></p>

          <a href="" class="messageS"><img src="./img/img_zeodon_profile/zeodon_messages.png" alt=""></a>
            <a href="" class="messageST"><img src="./img/img_zeodon_profile/zeodon_home.png" alt=""></a>
            <a href="" class="messageSTH"><img src="./img/img_zeodon_profile/zeodon_profile.png" alt=""></a>

            <p class="aboutYou">About</p>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore qui sed fugit nemo, sapiente modi aut dolor animi. Quo tempore dicta autem debitis error cupiditate ratione iure, beatae ipsa, suscipit maxime itaque totam cumque. Reprehenderit, molestiae inventore odio a earum consequatur commodi vitae nulla minima repudiandae impedit rerum, fuga corrupti?</p>
            <p class="detailsS">Details</p>
            <p class="ordersS">Orders</p>
            <p class="reviewsS">Revoews</p>

            <div class="borderDet"></div>
            <p class="fromS">From</p>
            <p class="detSsS">USA</p>

            <div class="borderDett"></div>
            <p class="fromST">Completed</p>
            <p class="detSsST">40</p>

            <div class="borderDettH"></div>
            <p class="fromSTH">Completed</p>
            <p class="detSsSTH">40</p>

            <p class="achievMents">Achievements</p>
            <a href="" class="viewmoreAchiev">view more</a>
            <div class="borderAchievm"></div>
            <p class="achivMm">Best seller 2020</p>
            <p class="achievMmTwo">achieved on 12.02.2020</p>

            <p class="myShopProfTwo">My Shop</p>

            <div>
                <img src="" alt="" class="imgShopProf">
                <p class="myShopProf">League of elgens acc</p>
                <p class="namePreof">NeXd</p>
                <p class="priceOfProf">50 $</p>
            </div>
            <p class="commRatings">Community ratings</p>
            <input type="text" class="commRatingsInp" placeholder="Tell your opinion about NexD">
          </div>

          <?php
        } else {
          header("Location: ../zeodon/log_in.php?error=no_user");
          exit();
        }
      ?>
  </body>
</html>
