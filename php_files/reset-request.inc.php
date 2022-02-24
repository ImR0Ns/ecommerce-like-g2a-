<?php

if (isset($_POST["email_sub"])) {

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);
	$email = $_POST["email"];


	$url = "localhost/zeodon/create_new_password.php?selector=" . $selector . "&validator=" . bin2hex($token);

	$expires = date("U") + 1800;

	require 'db.php';

	$userEmail = $_POST["email"];

  if (empty($email)) {
    header("Location: ../forget_pass.php?error=empty_case");
    exit();
  } else {
      $sql = "SELECT * FROM `users` WHERE email=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck === 0) {
        header("Location: ../forget_pass.php?error=no_user_with_email=".$email);
        exit();
      } else {
        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "There was an error!";
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "s", $userEmail);
          mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "There was an error!";
          exit();
        } else {
          $hashedToken = password_hash($token, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
          mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

              $output='<p>Dear user,</p>';
                $output.='<p>Please click on the following link to reset your password.</p>';
                $output.='<p>-------------------------------------------------------------</p>';
                $output.='<a href="' . $url . '">' . $url . '</a></p>';
                $output.='<p>-------------------------------------------------------------</p>';
                $output.='<p>Please be sure to copy the entire link into your browser.
                The link will expire after 1 day for security reason.</p>';
                $output.='<p>If you did not request this forgotten password email, no action 
                is needed, your password will not be reset. However, you may want to log into 
                your account and change your security password as someone may have guessed it.</p>';   
                $output.='<p>Thanks,</p>';
                $output.='<p>AllPHPTricks Team</p>';
                $body = $output; 
                
                $subject = "Password Recovery - AllPHPTricks.com";
                
                $email_to = $email;
                $fromserver = "helperbussines@gmail.com"; 
                require("../PHPMailer/PHPMailerAutoload.php");
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Host = "smtp.gmail.com"; // Enter your host here
                $mail->SMTPAuth = true;
                $mail->Username = "helperbussines@gmail.com"; // Enter your email here
                $mail->Password = "sunttare1212"; //Enter your password here
                $mail->Port = 25;
                $mail->IsHTML(true);
                $mail->From = "helperbussines@gmail.com";
                $mail->FromName = "Zeodon Team";
                $mail->Sender = $fromserver; // indicates ReturnPath header
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($email_to);
                if(!$mail->Send()){
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }else{
                    echo "<div class='error'>
                    <p>An email has been sent to you with instructions on how to reset your password.</p>
                    </div><br /><br /><br />";
                }

	      header("Location: ../forget_pass.php?reset=succes");
      }
  }
} else {
	header("Location: ../forget_pass.php");
	exit();
}
