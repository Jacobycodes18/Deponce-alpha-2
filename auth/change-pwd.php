<?php
    
    include '../includes/header-light.php';

    if($_SESSION['u_id']) {
        $id = $_SESSION['u_id'];
        $email = $_SESSION['u_email'];
        
        echo '<div class="header-space"></div>
        <main class="main-row">
    <div class="container">
        <article class="post-9 page type-page status-publish hentry">
            <div class="site-content">
                <div class="heading-decor">
                    <h1 class="h2">Reset Password</h1>
                </div>
                <div class="container">
                   <p>Change your password below.</p>
                   <br>
                    <form method="post" action="change-pwd.php">
                      <span class="wpcf7-form-control-wrap" style="">
                        <label for="curPass">Current Password</label>
                        <br>
                        <input class=" input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="password" id="curPass" name="curPass" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <label for="nPass">New Password</label>
                        <br>
                        <input class=" input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="password" id="nPass" name="nPass" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <label for="nPassc">Confirm New Password</label>
                        <br>
                        <input class=" input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="password" id="Passc" name="nPassc" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <input class="input wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Reset Password">
                        </span>
                    </form>
                </div>
            </div>
        </article>


    </div>
</main>';
        if(!isset($_POST['submit'])) {
            echo'not set';
            exit();
        } else {
            include_once '../includes/dbh.inc.php';
            
            $row = array();
            $curPass = mysqli_real_escape_string($conn, $_POST['curPass']);
            $nPass = mysqli_real_escape_string($conn, $_POST['nPass']);
            $nPassc = mysqli_real_escape_string($conn, $_POST['nPassc']);
            
                if (empty($curPass) ||empty($nPass) || empty($nPassc)){
                    echo 'all fields must be filled.';
                    exit();
                } else {
                    $query = "SELECT * FROM users WHERE `user_id` = '$id'";
                    $res = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($res, MYSQLI_NUM);
                    $hashedPwdCheck = password_verify($curPass, $row['user_pwd']);
                    
                     if($hashedPwdCheck == false) {
                         echo 'incorrect password';
                         exit();
                     } elseif ($nPass != nPassc) {
                         echo 'Passwords do not match';
                         exit();
                     } else {
                            $hashedPwd = password_hash($nPass, PASSWORD_DEFAULT);    
                
                            $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_id = '$id'";                    
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
                     }
                }
        }
    } else {
        echo 'ACCESS DENIED';
        exit();
    }

?>
