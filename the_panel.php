<?php
  session_start();

  require("./php_files/db.php");

?>
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

    <link rel="stylesheet" href="./css/sell_now.css?v=<?php echo time(); ?>">
    <script src="./js/sell_now.js"></script>
    <script src="./js/bara-search.js?v=<?php echo time(); ?>"></script>
    <!-- CSS -->

    <!--fontawesome-->

    <script src="https://kit.fontawesome.com/cba30a0f7c.js" crossorigin="anonymous"></script>

    <!--fontawesome-->

    <style>
        .borderOne {
            border: 1px solid black;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
        }
        .colorNames {
            color: #1e90ff;
        }
        .imgApp img{
            width: 250px;
            border: 0.5px solid black;
            margin: 10px 20px 0px 20px;
        }
        .imgApp p {
            margin: 30px 0px 5px 0px;
        }
        .acceptVer {
            border: none;
            padding: 5px 20px 5px 20px;
            color: green;
            font-size: 25px;
            margin: 0px 20px 0px 0px;
        }
        .declineVer {
            border: none;
            padding: 5px 20px 5px 20px;
            color: red;
            font-size: 25px;
        }
    </style>

</head>

<body>
<?php
    if(isset($_SESSION['adminName'])) {
    ?>
    <div class="container">
        <h1>Panel super-beta v 0.1</h1>
        <?php
          $sql = "SELECT * FROM idverif";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="borderOne">
                <div class="row">
                    <div class="col-md-6">
                        <p>First name: <span class="colorNames"> '.$row["fName"].'</span></p>
                        <p>Last name: <span class="colorNames"> '.$row["lName"].'</span></p>
                        <p>Country: <span class="colorNames">'.$row["cVer"].'</span></p>
                    </div>
                    <div class="col-md-6">
                        <p>City: <span class="colorNames">'.$row["cityV"].'</span></p>
                        <p>Address: <span class="colorNames">'.$row["aVer"].'</span></p>
                        <p>Postal code: <span class="colorNames">'.$row["postalC"].'</span></p>
                    </div>
                </div>
                <div class="imgApp">
                    <p>Images</p>
                    <img src="./img/img_zeodon_settings/zeodon_conn_acc_iomg.png" alt="">
                    <img src="./img/img_zeodon_settings/zeodon_conn_acc_iomg.png" alt="">
                    <div class="butt text-right mt-2">
                        <form action="./php_files/id_verf_accdec.php" method="post">
                            <input type="hidden" name="idUser" id="" value="'.$row["idUser"].'">
                            <button class="acceptVer" type="submit" name="ptAccept">Accept</button>
                            <button class="declineVer" type="submit" name="ptDecline">Decline</button>
                        </form>
                    </div>
                </div>
            </div>';
            }
          } else {
            echo "0 results";
          }
        ?>
    </div>
    <?php
        } else {
          header("Location: ../zeodon/admin_panel.php?e=need_login");
          exit();
        }
      ?>
</body>

</html>