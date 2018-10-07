<?php
    if(!isset($_GET['login'])) {
        return; 
    } else {
        $loginCheck = $_GET['login'];
                        
        if ($loginCheck == "empty") {
        echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Please Fill in all Fields.</div>'; 
        } elseif ($loginCheck == "error") {
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Incorrect email or password.</div>';
        } elseif ($loginCheck == "verifyEmail") {
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Please Verify your email.</div>';
        }
            }
?>