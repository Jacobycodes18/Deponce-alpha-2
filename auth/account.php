<?php
    include '../includes/header.php';
    
    if(!$_SESSION) {
//        header("Location: ../home/?pleaseLogin#login");
        echo 'please login to continue';
        exit();
    } else {
        echo 'logged in';
    }
?>