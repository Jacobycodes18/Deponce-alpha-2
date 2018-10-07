<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user  = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
     
    //error handlers 
    //check for empty fields
    if (empty($fname) || empty($lname) || empty($email) || empty($user) || empty($pass) || empty($cpass)) {
        header("Location: ../home/?signup=empty#signup");
        exit();
    } else {
            if ($pass != $cpass) {
                header("Location: ../home/?signup=passwordsDontMatch#signup");
                exit();
            } else {
        // check for validation
        if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
            header("Location: ../home/?signup=invalid#signup");
            exit();
        } else {
            //email validation 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../home/?signup=email#signup");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid='$user'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                    header("Location: ../home/?signup=userTaken#signup");
                    exit();
                } else {
                    $sql = "SELECT * FROM users WHERE user_email='$email'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                    header("Location: ../home/?signup=EmailAlreadyRegistered#signup");
                    exit();
                    
                } else {
                        //validation token
                    $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!$/()*';
                    $token = str_shuffle($token);
                    $token = substr($token, 0, 10);
                    //hash password 
                    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
                    // insert user into database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, emailVerified, token) VALUES ('$fname', '$lname', '$email', '$user','$hashedPwd','0','$token');";
                    
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
                    $mail->addAddress($email, $fname);     // Add a recipient
                    $mail->addAddress('');               // Name is optional
                    $mail->addReplyTo('');
                    $mail->addCC('');
                    $mail->addBCC('');

                    //Attachments
                    $mail->addAttachment('');         // Add attachments
                    $mail->addAttachment('');    // Optional name

                    //Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Email Confirmation';
                    $mail->Body    = "
                        Please click on the link below to verify your email address:<br><br>
                        <a href='localhost/deponce/novo-simplified/includes/confirm.php?email=$email&token=$token'>Click here!</a>
                    ";
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send(); 
                    
                        $_SESSION['email'] = $row['user_email'];
                        $_SESSION['token'] = $row['token'];
                        
                    header("Location: ../home/?signup=success#signup");
                    exit();
                
                }
            }
        }
    }
    }
    }

} else {
    header("Location: ../home/?signup=notSubmited");
    exit();
}