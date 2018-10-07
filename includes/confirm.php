<?php 
    session_start();

    if (empty($_GET['email']) || empty($_GET['token'])) {
       header("Location: ../home/index.php?error");
    exit();
    } else {
        include_once 'dbh.inc.php';
        
        $email = mysqli_real_escape_string($conn, $_GET['email']);
        $token = mysqli_real_escape_string($conn, $_GET['token']);

        $sql = "SELECT * FROM users WHERE user_email='$email' AND token='$token'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if (mysqli_num_rows($result) != 0) {
        
        $sql = "UPDATE users SET emailVerified = 1 WHERE user_email = '$email'";
        $del = "UPDATE users SET token = ' ' WHERE user_email = '$email'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $del);
            
        echo '<h1>Email account Verified. Click <a href="../home/#login">here</a> to login</h1>';
        exit();
    } else {
            header("Location: ../home/index.php?error");
            exit();
        }
    }
 ?>
 
