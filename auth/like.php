<?php 
session_start();
require_once '../includes/dbh.inc.php';

if(isset($_SESSION['u_id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['like']);
    $user = $_SESSION['u_id'];
    
    $sql = "SELECT users, article FROM post_likes WHERE users ='$user' AND article = '$id'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        exit();
    } else {
    $sql = "INSERT INTO post_likes (users, article) VALUES ('$user', '$id')";
            
    mysqli_query($conn, $sql);
    }
} else {
    echo 'login';
    exit();
}

//header('Location: ../news');