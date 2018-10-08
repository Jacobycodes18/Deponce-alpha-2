<?php
    include '../includes/header-light.php';
    
    if(!$_SESSION) {
//        header("Location: ../home/?pleaseLogin#login");
        echo 'please login to continue';
        exit();
    } else {
        echo 'logged in';
    }
?>

<main ng-app="accountUi">
   <div ng-controller="accountUi">
               
   </div>
</main>