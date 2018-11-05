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
                                $mail->Body    = '<div class="main" style="font-family: sans-serif;">
   <center>
        <table style="width:100%;height:100%;background: #eeeeee;">
               <tr>
                <td align="center">
                      <table>
                          <tr><td> <h1>Deponce Accounts</h1></td></tr>
                      </table>
                   
                    <table style="max-width:600px;width:100%;background-color:#ffffff;border-radius:5px;padding: 20px;">                      
                        <tr>
                            <td>
                                <h2>Password Reset Successfully</h2>
                            </td>
                        </tr>
                        
                           <tr>
                            <td>
                                <p>If you received this email by mistake and did not change your password please contact us immediately.</p>
                                <a href="mailto:support@deponce.io" style="color:#336699" target="_blank">security@deponce.io</a>
                            </td>
                        </tr>   
                    </table>
                           <tr valign="top" align="center">
                            <td>
                              <table style="max-width: 600px;width: 100%;">
                                  <tr>
                                      <td valign="top" align="center">
                                           <div>
                                               <span>
                                                   <a href="http://deponce.io/" target="_blank">
                                                       DEPONCE LOGO
                                                   </a>
                                               </span>
                                           </div>
                                      </td>
                                  </tr>
                                </table>
                            </td>
                        </tr>
                </td>
            </tr>
        </table>
    </center>
</div>';
                                $mail->AltBody = 'Your Password has been Reset. If you did not make this change please contact us immediately';

                                $mail->send();
                
                header("Location: ../home?pwd=changed#login");
            }
        
} 
?>