<?php
    include '../includes/header-light.php';
    
    if(!$_SESSION) {
//        header("Location: ../home/?pleaseLogin#login");
        echo 'please login to continue';
//        exit();
    } else {
        echo 'logged in';
    }
?>
 <main class="main-row">
		<div class="container">
            <div ng-app="accApp">
               <div ng-view></div>
            </div>
     </div>
</main>