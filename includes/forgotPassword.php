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
            
            $sql = "UPDATE users SET token = '$token', tokenExpire = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE user_email = '$email'";
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
                                <h2>Password Reset</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="localhost/deponce/novo-simplified/includes/reset.php?email='.$email.'&token='.$token.'" style="color: #ffffff !important;display: inline-block;font-weight: 500;font-size: 16px;line-height: 42px;width: auto;white-space: nowrap;height: 42px;margin: 12px 5px 12px 0;padding: 0 22px;text-decoration: none;text-align: center;border: 0;border-radius: 3px;vertical-align: top;background-color: #5d5d5d !important;">Reset Password</a>
                            </td>
                        </tr>
                           <tr>
                            <td>
                                <p>If you received this email by mistake and did not request to change your password please contact us immediately.</p>
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
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    if(!$mail->send()) {
                        header("Location: ../reset-password?reset=error");
                    } else {
                        header("Location: ../reset-password?reset=sent");
                    }
            
        }  
    }
    
    