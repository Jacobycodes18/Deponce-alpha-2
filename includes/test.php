<?php
if (!isset($_POST['submit'])) {
     header("Location: ../home?notSet");
} else {
            include_once 'dbh.inc.php';
    
                $email = mysqli_real_escape_string($conn, $_GET['email']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                $passc = mysqli_real_escape_string($conn, $_POST['passc']);

            if (empty($pass) || empty($passc)){
                header("Location: ../home?empty");
                exit();
            } elseif ($pass != $passc) {
                 header("Location: ../home?passwordsDontMatch");
                exit();
            } else {              
                $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);    
                
                $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_email = '$email'";
                $del = "UPDATE users SET token = '' WHERE user_email = '$email'";
                    
                mysqli_query($conn, $sql);
                mysqli_query($conn, $del);
                
                header("Location: ../home?success");
            }
        
} 
?>