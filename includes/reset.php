<?php

    if (!isset($_GET['email']) && isset($_GET['token'])) {
        header("Location: ../home/index.php?error2");
        exit();
        
    } else {
        include_once 'dbh.inc.php';
        
        $email = mysqli_real_escape_string($conn, $_GET['email']);
        $token = mysqli_real_escape_string($conn, $_GET['token']);
        
        $sql = $sql = "SELECT * FROM users WHERE user_email='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck < 0) {
            header("Location: ../home/index.php?error1");
            exit();
            
        } else {
            if (!isset($_POST['submit'])) {
                echo
            '<form action="../includes/reset.php" method="post">
        
        <input type="password" name="newPassword">
        <input type="password" name="newPasswordC">
        <input type="submit">
        </form>';
               exit();
            } else {
                $password = mysqli_real_escape_string($conn, $_POST['newPassword']);
                $passwordc = mysqli_real_escape_string($conn, $_POST['newPasswordC']);
                
            if ($password != $passwordc){
                header("Location: ../includes/reset.php?passwordsDontMatch");
                exit();
            } else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);    
                
                $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_email = '$email'";
                    
                mysqli_query($conn, $sql);
            }
        }
    }
    }

?>