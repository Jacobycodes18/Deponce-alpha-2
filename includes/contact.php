<?php

    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (!isset($_POST['submit'])) {
        header("Location: ../contact?error=notSubmit");
        exit();
    } else {
        include_once 'dbh.inc.php';
        
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $msg = mysqli_real_escape_string($conn, $_POST['message']);
        
        $_SESSION['POSTDATA'] = $_POST;
        
        if(empty($name) || empty($email) || empty($msg)) {
            header("Location: ../contact?error=empty");
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../contact?error=email");
                exit();
            } else {
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
                    $mail->addAddress('contact@deponce.io', '');     // Add a recipient
                    $mail->addAddress('');               // Name is optional
                    $mail->addReplyTo($email);
                    $mail->addCC('');
                    $mail->addBCC('');

                    //Attachments
                    $mail->addAttachment('');         // Add attachments
                    $mail->addAttachment('');    // Optional name

                    //Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Web contact form';
                    $mail->Body    = "
                    From: $email <br>
                    Name: $name <br>
                    Message: $msg 
                    ";
                    $mail->AltBody = '';

                    $mail->send();
                
                    header("Location: ../contact?error=success");
            }
        }

    }