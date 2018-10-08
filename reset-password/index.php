<?php
    include '../includes/header.php';
?>
  
<div class="header-space"></div>
<main class="main-row">
    <div class="container">
        <article class="post-9 page type-page status-publish hentry">
            <div class="site-content">
                <div class="heading-decor">
                    <h1 class="h2">Forgot Password</h1>
                </div>
                <div class="container">
                   <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
                   <br>
                    <form method="post" action="../includes/forgotPassword.php">
                      <span class="wpcf7-form-control-wrap" style="">
                        <label for="user_login">Enter your email</label>
                        <br>
                        <input class=" input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="text" id="user_login" name="userLogin" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <input class="input wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Reset Password">
                        </span>
                    </form>
                    <?php
                        if(!isset($_GET['reset'])) {
                            return; 
                        } else {
                            $resetCheck = $_GET['reset'];

                            if ($resetCheck == "error") {
                            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Something went wrong. Try again.</div>'; 
                            } elseif ($resetCheck == "nan"){
                                echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Entered email is not registerd with us.</div>'; 
                            } elseif ($resetCheck == "sent"){
                                echo '<div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" role="alert" style="display:block;">Please check your email for a Password Reset link. It will expire in five minutes.</div>';
        }
                                }
                    ?>
                </div>
            </div>
        </article>


    </div>
</main>
<div class="header-space"></div>

<?php
    include '../includes/socials_.php';
    include '../includes/footer-main.php';

?>