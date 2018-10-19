<?php
    if(isset($_POST['submit'])) {
        
        include '../includes/dbh.inc.php';
        
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $sub = mysqli_real_escape_string($conn, $_POST['subTitle']);
        $imgUrl = mysqli_real_escape_string($conn, $_POST['image']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        
        if(!empty($title) || !empty($sub) || !empty($imgUrl) || !empty($content)) {
            $id = '1234567890';
            $id = str_shuffle($id);
            $id = substr($id, 0, 10);
//            $pid = 'dpn' + $id; 


            $sql = "INSERT INTO posts (post_title, post_subtitle, post_id, post_img, post_content) VALUES ('$title', '$sub', 'dpn$id', '$imgUrl','$content');";
            
            $ran = mysqli_query($conn, $sql);
            
            if($ran) {
                $sql = "UPDATE posts SET post_date = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE post_title = '$title'";
                mysqli_query($conn, $sql);
                echo 'posted';
            } else {
                echo'didnt run';
            }
        } else {
            echo 'all fields must be filled';
        }
    } else {
        echo 'error';
        exit();
    }
?>