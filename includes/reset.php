<?php


    include 'header.php';

    if (!isset($_GET['email']) && !isset($_GET['token'])) {
        echo '<section class="main-row">
		<div class="container-fluid no-padding">
			<!-- Banner -->
			<div class="banner-area external-indent">
				<div class="banner-social-buttons">
				    <div class="links">
				        <a href="#" class="item"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
				        <a href="#" class="item"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
				        <a href="#" class="item"><i class="fa fa-twitter"></i> <span>Twitter</span></a>										    </div>
				</div>
				<div class="banner banner-404 white">
					<div class="item tac" style="background-image: url(https://images.pexels.com/photos/158229/lost-places-pforphoto-leave-factory-158229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
					<div class="container">
						<div class="cell middle">
							<h1 class="b-404-heading"><span>404</span><br>ERROR</h1>
							<p>The link you are using has expired.</p>
							<a href="../Novo-simplified/home" class="button-style1">GET BACK HOME</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END Banner -->
		</div>
    </div>
	</section>';
        exit();
        
    } else {
        include_once 'dbh.inc.php';
        
        $email = mysqli_real_escape_string($conn, $_GET['email']);
        $token = mysqli_real_escape_string($conn, $_GET['token']);
        
        $sql = "SELECT * FROM users WHERE user_email='$email' AND token='$token' AND token!='' AND tokenExpire > NOW()";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if (mysqli_num_rows($result) == 0) {
            echo '<section class="main-row">
		<div class="container-fluid no-padding">
			<!-- Banner -->
			<div class="banner-area external-indent">
				<div class="banner-social-buttons">
				    <div class="links">
				        <a href="#" class="item"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
				        <a href="#" class="item"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
				        <a href="#" class="item"><i class="fa fa-twitter"></i> <span>Twitter</span></a>										    </div>
				</div>
				<div class="banner banner-404 white">
					<div class="item tac" style="background-image: url(https://images.pexels.com/photos/158229/lost-places-pforphoto-leave-factory-158229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
					<div class="container">
						<div class="cell middle">
							<h1 class="b-404-heading"><span>404</span><br>ERROR</h1>
							<p>The link you are using has expired.</p>
							<a href="../Novo-simplified/home" class="button-style1">GET BACK HOME</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END Banner -->
		</div>
    </div>
	</section>';
            exit();
            
        } else {
            
                echo
            '<article class="post-9 page type-page status-publish hentry">
            <div class="site-content">
                <div class="heading-decor">
                    <h1 class="h2">Reset Password</h1>
                </div>
                <div class="container">
                   
                   <br>
                    <form method="post" action="change.php?email='.$email.'&token='.$token.'">
                      <span class="wpcf7-form-control-wrap" style="">
                        <label for="pass">New Password</label>
                        <br>
                        <input class="input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="password" id="pass" name="pass" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <input class="input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="password" id="passc" name="passc" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <input class="input wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Reset Password">
                        </span>
                    </form>'
                    ?>
                    <?php
                        if(!isset($_GET['error'])) {
                            return; 
                        } else {
                            $check = $_GET['error'];

                            if ($check == "empty") {
                            echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Must input both fields.</div>'; 
                            } elseif ($check == "pass"){
                                echo '<div class="wpcf7-response-output wpcf7-validation-errors" role="alert" style="display:block;">Passwords do not match.</div>'; 
                            } elseif ($check == "nan"){
                                echo '<div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" role="alert" style="display:block;">Password successfully changed.</div>';
                                
                                
                                }
                                }
?>
                    <?php
                '</div>
            </div>
        </article>'
                    ;
           
               
            } 
    }
    

?>


