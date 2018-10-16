<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

if (!isset($_POST['submit'])) {
     header("Location: ../home?notSet");
} else {
            include_once 'dbh.inc.php';
    
                $email = mysqli_real_escape_string($conn, $_GET['email']);
                $token = mysqli_real_escape_string($conn, $_GET['token']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                $passc = mysqli_real_escape_string($conn, $_POST['passc']);

            if (empty($pass) || empty($passc)){
                header("Location: reset.php?email=$email&token=$token&error=empty");
                exit();
            } elseif ($pass != $passc) {
                 header("Location: reset.php?email=$email&token=$token&error=pass");
                exit();
            } else {              
                $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);    
                
                $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_email = '$email'";
                $del = "UPDATE users SET token = '' WHERE user_email = '$email'";
                    
                mysqli_query($conn, $sql);
                mysqli_query($conn, $del);
                
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
                                $mail->addReplyTo('security@deponce.io');
                                $mail->addCC('');
                                $mail->addBCC('');

                                //Attachments
                                $mail->addAttachment('');         // Add attachments
                                $mail->addAttachment('');    // Optional name

                                //Content
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = 'Password Reset Succesfully';
                                $mail->Body    = " Your Password has been Reset. If you did not make this change please contact us immediately";
                                $mail->AltBody = 'Your Password has been Reset. If you did not make this change please contact us immediately';

                                $mail->send();
                
                header("Location: ../home?pwd=changed#login");
            }
        
} 
?>