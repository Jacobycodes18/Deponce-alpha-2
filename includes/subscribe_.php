<?php
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

require_once 'C:\xampp\htdocs\vendor\autoload.php';
   
    if(isset($_POST['sub'])) {
        
    $email = $_POST['mail'];     
    $submit = $_POST['sub'];        
        
    $mail = new PHPMailer();
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP(true);                                      // Set mailer to use SMTP
    $mail->Host = 'e56.ehosts.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'no_reply@gerrodplusabbie.us';                 // SMTP username
    $mail->Password = '1]@6UVuA&wF_';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no_reply@gerrodplusabbie.us', '');
    $mail->addAddress($email);     // Add a recipient
    $mail->addAddress('');               // Name is optional
    $mail->addReplyTo('');
    $mail->addCC('');
    $mail->addBCC('jacobyclarke14@gmail.com');

    //Attachments
    $mail->addAttachment('');         // Add attachments
    $mail->addAttachment('');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Deponce Website Subcription';
    $mail->Body    = "$email 'You have been subscribed to recieve updates!'";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send(); 
    }

?>