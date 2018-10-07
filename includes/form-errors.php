<?php

    if(!isset($_GET['signup'])) {
        return; 
    } else {
        $signupCheck = $_GET['signup'];
                        
        if ($signupCheck == "empty") {
        echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Please Fill in all Fields.</div>'; 
        } elseif ($signupCheck == "passwordsDontMatch"){
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Passwords Do not match.</div>';
        } elseif ($signupCheck == "invalid"){
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Name must only include characters "a-Z".</div>';
        } elseif ($signupCheck == "email"){
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Invalid Email.</div>';
        }  elseif ($signupCheck == "userTaken"){
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Username taken.</div>';
        } elseif ($signupCheck == "EmailAlreadyRegistered"){
            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Account already registered with entered email.</div>';
        } elseif ($signupCheck == "success"){
            echo '<div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" role="alert" style="display:block;">Form Submitted. Please check your email to verify your address.</div>';
        }
            }


?>