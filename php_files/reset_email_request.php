<?php

if (isset($_POST["submit_email"])) {

    require 'db.php';

    $user  = $_POST["username"];
    $password =  $_POST["password"];
    $email_one = $_POST["email_one"];
    $email_two = $_POST["email_two"];

    if (empty($user) || empty($password) || empty($email_one) || empty($email_two)) {
        header("Location: ../forgot_email.php?e=empty_case(s)");
        exit();
    } else if($email_one !== $email_two) {
        header("Location: ../forgot_email.php?e=email_one=".$email_one."!email_two=".$email_two."");
        exit();
    }else {

        $sql = "SELECT * FROM users WHERE username=?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['password']);
            if ($pwdCheck == false) {
                header("Location: ../forgot_email.php?e=wrong_password");
                exit();
            }
            else if ($pwdCheck == true) {
                
                $selector = bin2hex(random_bytes(8));
                $token = random_bytes(32);

                $url = "localhost/zeodon/confirm_new_email.php?selector=" . $selector . "&validator=" . bin2hex($token);
                
                $expires = date("U") + 1800;

                $sql = "DELETE FROM emailreset WHERE emResetEmail=?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $email_one);
                mysqli_stmt_execute($stmt);

                $sql = "INSERT INTO emailreset (emResetEmail, emResetSelector, emResetToken, emResetExpires, newEmail) VALUES (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                $hashedToken = password_hash($token, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sssss", $email_one, $selector, $hashedToken, $expires, $user);
                mysqli_stmt_execute($stmt);

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
                
                $subject = "Zeodon Email Recovery";
                
                $email_to = $email_one;
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

	        header("Location: ../forgot_email.php?reset=succes");


            }
            else {
                header("Location: ../forgot_email.php?e=wrong_password");
                exit();
            }
        } else {
            header("Location: ../forgot_email.php?e=nouser=".$user."");
            exit();
        }
    }

} else {
    header("Location: ../forgot_email.php");
    exit();
}