<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(!isset($_POST['submit'])) {
        header("Location: ../404.php");
        exit();
    } else {
        include_once 'dbh.inc.php';
        
        $email = mysqli_real_escape_string($conn, $_POST['userLogin']);
        
        $sql = "SELECT user_uid FROM users WHERE user_email = '$email'";
            
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 0) {
            header("Location: ../reset-password?reset=nan");
        } else {
            
            $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!$/()*';
            $token = str_shuffle($token);
            $token = substr($token, 0, 10);
            
            $sql = "UPDATE users SET token = '$token', tokenExpire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE user_email = '$email'";
            mysqli_query($conn, $sql);
            
            require_once '../vendor/autoload.php';
            
            $mail = new PHPMailer();
                    //Server settings
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP(true);                                      // Set mailer to use SMTP
                    $mail->Host = 'e56.ehosts.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'no_reply@deponce.io';                 // SMTP username
                    $mail->Password = 'I(u&a1RS![i1g#@LAV';                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465;                                    // TCP port to connect to

                    //Recipients
                    $mail->setFrom('no_reply@deponce.io', '');
                    $mail->addAddress($email, '');     // Add a recipient
                    $mail->addAddress('');               // Name is optional
                    $mail->addReplyTo('');
                    $mail->addCC('');
                    $mail->addBCC('');

                    //Attachments
                    $mail->addAttachment('');         // Add attachments
                    $mail->addAttachment('');    // Optional name

                    //Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Password Reset';
                    $mail->Body    = "
                        Please click on the link below to change your password:<br><br>
                        <a href='localhost/deponce/novo-simplified/includes/reset.php?email=$email&token=$token'>Click here!</a>
                    ";
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    if(!$mail->send()) {
                        header("Location: ../reset-password?reset=error");
                    } else {
                        header("Location: ../reset-password?reset=sent");
                    }
            
        }  
    }
    
    