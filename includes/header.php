<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" class="js_active vc_mobile vc_transform vc_transform">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />

<link rel='stylesheet' id='contact-form-7-css'  href='../css/styles972f.css' type='text/css' media='all' />
<link rel='stylesheet' id='novo-iconpicker-css'  href='../include/css/icons.css' type='text/css' media='all' />
<link rel='stylesheet' id='novo-style-default-css'  href='../css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href='../css/default-skin.css' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='../css/js_composer.min8b06.css?ver=5.4.7' type='text/css' media='all' />
<link rel='stylesheet' id='novo-frontend-grid-css'  href='../css/frontend-grid.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='../plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min8b06.css?ver=5.4.7' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css-css'  href='../css/owl.carousel55fe.css?ver=4.9.5' type='text/css' media='all' />
<!--<link rel='stylesheet' id='novo-frontend-grid-css'  href='../css/frontend-grid.css' type='text/css' media='all' />-->
<link rel='stylesheet' id='magnific-popup-css'  href='../css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe1-css'  href='../css/photoswipe.css' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href='../css/default-skin.css' type='text/css' media='all' />
<link rel='stylesheet' id='novo-circle-animations-css'  href='../css/circle_animations.css' type='text/css' media='all' />
<link rel='stylesheet' id='novo-style-css'  href='../css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='novo-style-css'  href='../css/new-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='novo-mobile-css'  href='../css/mobile.css' type='text/css' media='all' />

<script type='text/javascript' src='../js/jquery/jqueryb8ff.js'></script>
<script type='text/javascript' src='../js/jquery/jquery-migrate.min330a.js'></script>
<script type="text/javascript" src="../plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min8b06.js?ver=5.4.7"></script>

<script type="text/javascript" src="../plugins/js_composer/assets/lib/bower/jquery-blockui/jquery.blockUI.min44fd.js"></script>

<script type="text/javascript" src="../js/owl.carousel.min.js"></script>

<script type="text/javascript" src="../js/load-images.js"></script>
<script type="text/javascript" src="../js/load-posts.js"></script>
<script type="text/javascript" src="../plugins/angular/lib/angular.min.js"></script>
<script type="text/javascript" src="../js/accApp.js"></script>
<!--<script type="text/javascript" src="../js/accData.js"></script>-->
<script type="text/javascript" src="../js/instafeed.min.js"></script>
<script type="text/javascript" src="../js/create-feed.js"></script>





</head>


<body class="page-template page-template-template-landing page-template-template-landing-php page page-id-977 woocommerce-js site-dark header_type_logo_left header_space_no right-click-disable wpb-js-composer js-comp-ver-5.4.7 vc_responsive">

<div class="right-click-disable-message main-row" data-anchor="login">
        <div class="container">
            <div class="cell">
                <i class="fa fa-close" id="login-close" style="position: absolute; top: 30px; right: 30px; font-size: 1.7em; cursor: pointer;"></i>
                <p style="text-align: center;">
                    <strong>
                        <span style="font-size: 18px">
                            Client Login
                        </span>
                    </strong>
                </p>
                <form method="POST" action="../includes/login.inc.php">
                    <div class="tac" style="max-width: 350px; margin: 0 auto;">
                        <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type="text" name="user" value="<?php if(isset($_POST['user'])){echo $_POST['user'];}?>" size="40" aria-required="true" aria-invalid="false" placeholder="Username">
                        </span>
                          <br>
                           <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type="password" name="pass" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Password">
                        </span>
                        <br>
                        <input class="wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Submit">
                        <p class="lost-password" style="margin-left: 0;"><a href="../reset-password/">Forgot Password</a></p>
                    </div>
                    
                    <?php
                            include_once 'login-errors.php';
                    ?>
                </form>
            </div>
        </div>
    </div>
      
       <div class="right-click-disable-message main-row" id="sign-up" data-anchor="signup">
        <div class="container">
            <div class="cell">
                <i class="fa fa-close" id="sign-up-close" style="position: absolute; top: 30px; right: 30px; font-size: 1.7em; cursor: pointer;"></i>
                <p style="text-align: center;">
                    <strong>
                        <span style="font-size: 18px">
                            Sign Up
                        </span>
                    </strong>
                </p>
                <form method="POST" action="../includes/signup.inc.php">
                    <div class="tac" style="max-width: 350px; margin: 0 auto;">
                        <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type="text" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" size="40" aria-required="true" aria-invalid="false" placeholder="Firstname">
                        </span>
                          <br>
                           <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type="text" name="lname" value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];}?>" size="40" aria-required="true" aria-invalid="false" placeholder="Lastname">
                        </span>
                          <br>
                           <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" size="40" aria-required="true" aria-invalid="false" placeholder="Email">
                        </span>
                        <br>
                           <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" size="40" aria-required="true" aria-invalid="false" placeholder="Username">
                        </span>
                        <br>
                           <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type=password name="password" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Password">
                        </span>
                        <br>
                           <span class="wpcf7-form-control-wrap">
                            <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style3" type=password name="cpassword" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Confirm Password">
                        </span>
                        <br>
                        <input class="wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Sign Up">
                        
                    </div>
                    <?php
                            include_once 'form-errors.php';
                    ?>
                    
                </form>
            </div>
        </div>
        </div>

<div id="all" class="site">
<!--preloader-->
<div class="preloader">
					<div class="preloader_content">
						<div class="preloader_content__container">
							<p class="preloader_content__container__text">DEPONCE</p>
															<ul class="preloader_content__container__list count_5">
																			<li class="preloader_content__container__list__item">Portfolio</li>
																			<li class="preloader_content__container__list__item">Photography</li>
																			<li class="preloader_content__container__list__item">Magazine</li>
																			<li class="preloader_content__container__list__item">Film Reel</li>
																			<li class="preloader_content__container__list__item">Content</li>
																	</ul>
													</div>
					</div>
				</div>
<!--preloader-->
<!--Nav------------->
<header class="site-header header_logo_left dark main-row">
    <div class="container-fluid">
        <div class="side-bar-button multimedia-icon-list"></div>
        <div class="logo"><a href="../home/">DEPONCE</a></div>
        <div class="fr">
            <nav class="navigation visible_menu hover-style1">
                <ul id="menu-navigation" class="menu">
                    <li id="menu-item-293" class="<?php if($page=='home'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-293"><a href="../home/"><span>Home</span></a>
<!--
                        <ul class="sub-menu">
                            <li id="menu-item-853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-853"><a href="../home/index.html"><span>One page</span></a></li>
                            <li id="menu-item-449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-449"><a href="../home/home-photographer/index.html"><span>Photographer</span></a></li>
                            <li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990"><a href="../home-business/index.html"><span>Business</span></a></li>
                            <li id="menu-item-448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-448"><a href="../home/home-portfolio/index.html"><span>Portfolio</span></a></li>
                            <li id="menu-item-571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-571"><a href="../home/home-shop/index.html"><span>Shop</span></a></li>
                            <li id="menu-item-570" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-570"><a href="../index.html"><span>Agency</span></a></li>
                            <li id="menu-item-569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-569"><a href="../home/home-freelancer/index.html"><span>Freelancer</span></a></li>
                            <li id="menu-item-1045" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045"><a href="../home-categories/index.html"><span>Categories</span></a></li>
                            <li id="menu-item-1047" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1047"><a href="../split-screen/index.html"><span>Split Screen</span></a></li>
                        </ul>
-->
                    </li>
                    <li id="menu-item-714" class="<?php if($page=='why'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-custom menu-item-object-custom menu-item-714"><a href="../why/"><span>Why</span></a>
<!--
                        <ul class="sub-menu">
                            <li id="menu-item-717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-717"><a href="../blog-grid/index.html"><span>Grid</span></a></li>
                            <li id="menu-item-716" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-716"><a href="../blog-masonry/index.html"><span>Masonry</span></a></li>
                            <li id="menu-item-715" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-715"><a href="../blog-horizontal/index.html"><span>Horizontal</span></a></li>
                            <li id="menu-item-933" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-933"><a href="../protected-blog/index.html"><span>Password protected</span></a></li>
                        </ul>
-->
                    </li>
                    <li id="menu-item-718" class="<?php if($page=='our-pro'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-custom menu-item-object-custom menu-item-718"><a href="../our-process/"><span>Our Process</span></a>
<!--
                        <ul class="sub-menu">
                            <li id="menu-item-719" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-719"><a href="../about-me/index.html"><span>About me</span></a></li>
                            <li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-720 current_page_item menu-item-724"><a href="index.html"><span>Coming soon</span></a></li>
                            <li id="menu-item-725" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-725"><a href="../page-404.html"><span>404 Page</span></a></li>
                            <li id="menu-item-735" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-735"><a href="#"><span>Menu levels</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-726" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-726"><a href="#"><span>Menu level 1</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-729" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-729"><a href="#"><span>Menu level 1</span></a></li>
                                            <li id="menu-item-730" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-730"><a href="#"><span>Menu level 2</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-734" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-734"><a href="#"><span>Menu level 1</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-731" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-731"><a href="#"><span>Menu level 3</span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-727" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-727"><a href="#"><span>Menu level 2</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-732"><a href="#"><span>Menu level 1</span></a></li>
                                            <li id="menu-item-733" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-733"><a href="#"><span>Menu level 2</span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-728" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-728"><a href="#"><span>Menu level 3</span></a></li>
                                </ul>
                            </li>
                            <li id="menu-item-950" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-950"><a href="#"><span>Navigation types</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-955"><a href="../disabled-menu/index.html"><span>Disabled menu</span></a></li>
                                    <li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-954"><a href="../side-menu/index.html"><span>Side menu</span></a></li>
                                    <li id="menu-item-953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953"><a href="../fullscreen-menu/index.html"><span>Fullscreen menu</span></a></li>
                                    <li id="menu-item-952" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-952"><a href="../hidden-menu/index.html"><span>Hidden menu</span></a></li>
                                    <li id="menu-item-951" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-951"><a href="../visible-menu/index.html"><span>Visible menu</span></a></li>
                                </ul>
                            </li>
                            <li id="menu-item-849" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-849"><a href="../services/index.html"><span>Services</span></a></li>
                        </ul>
-->
                    </li>
                    <li id="menu-item-738" class="<?php if($page=='info'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-738"><a href="#"><span>Info</span></a>
                        <ul class="sub-menu">
                            <li id="menu-item-839" class="<?php if($sub=='meet'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-839"><a href="../meet-the-team/"><span>Meet The Team</span></a>
                            <li id="menu-item-845" class="<?php if($sub=='about'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-845"><a href="../this-is-deponce/"><span>About Us</span></a></li>
                            <li id="menu-item-844" class="<?php if($sub=='services'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-844"><a href="../services/"><span>Services</span></a></li>
<!--
                                <ul class="sub-menu">
                                    
                                    <li id="menu-item-843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-843"><a href="../gallery/grid/col-4/index.html"><span>Col 4</span></a></li>
                                    <li id="menu-item-842" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-842"><a href="../gallery/grid/col-2-wide/index.html"><span>Col 2 wide</span></a></li>
                                    <li id="menu-item-841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-841"><a href="../gallery/grid/col-3-wide/index.html"><span>Col 3 wide</span></a></li>
                                    <li id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840"><a href="../gallery/grid/col-4-wide/index.html"><span>Col 4 wide</span></a></li>
                                </ul>
-->
                           
<!--
                            <li id="menu-item-832" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-832"><a href="../gallery/masonry/index.html"><span>Masonry</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-838"><a href="../gallery/masonry/col-2/index.html"><span>Col 2</span></a></li>
                                    <li id="menu-item-836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836"><a href="../gallery/masonry/col-3/index.html"><span>Col 3</span></a></li>
                                    <li id="menu-item-834" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834"><a href="../gallery/masonry/col-4/index.html"><span>Col 4</span></a></li>
                                    <li id="menu-item-837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-837"><a href="../gallery/masonry/col-2-wide/index.html"><span>Col 2 wide</span></a></li>
                                    <li id="menu-item-835" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835"><a href="../gallery/masonry/col-3-wide/index.html"><span>Col 3 wide</span></a></li>
                                    <li id="menu-item-833" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-833"><a href="../gallery/masonry/col-4-wide/index.html"><span>Col 4 wide</span></a></li>
                                </ul>
                            </li>
                            <li id="menu-item-965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-965"><a href="../gallery/flow/index.html"><span>Flow</span></a></li>
                            <li id="menu-item-929" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-929"><a href="../gallery/protected-gallery/index.html"><span>Protected gallery</span></a></li>
                            <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-930"><a href="../gallery/project-items/index.html"><span>Project items</span></a></li>
                            <li id="menu-item-739" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-739"><a href="#"><span>Project page</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-741" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-741"><a href="../project/one/index.html"><span>Simple</span></a></li>
                                    <li id="menu-item-742" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-742"><a href="../project/wishing-well/index.html"><span>Slider</span></a></li>
                                    <li id="menu-item-743" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-743"><a href="../project/johnny-b-goode/index.html"><span>Masonry</span></a></li>
                                    <li id="menu-item-744" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-744"><a href="../project/redhead/index.html"><span>Horizontal</span></a></li>
                                </ul>
                            </li>
                            <li id="menu-item-967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-967"><a href="../gallery/horizontal/index.html"><span>Horizontal</span></a></li>
                            <li id="menu-item-831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-831"><a href="../gallery/hover-effects/index.html"><span>Hover effects</span></a></li>
-->
                        </ul>
                    </li>
                    <li id="menu-item-298" class="<?php if($page=='works'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-298"><a href="../our-work/"><span>Our Work</span></a>
                        <ul class="sub-menu">
                            <li id="menu-item-297" class="<?php if($sub=='con-dev'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-297"><a href="../branding/"><span>Branding</span></a></li>
                            <li id="menu-item-295" class="<?php if($sub=='photo'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-295"><a href="../photo-gallery/"><span>Photo Gallery</span></a></li>
                            <li id="menu-item-294" class="<?php if($sub=='reel'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-post_type menu-item-object-page menu-item-294"><a href="../film-reel/"><span>Film Reel</span></a></li>
                        </ul>
                    </li>
                    <li id="menu-item-846" class="<?php if($page=='contact'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-custom menu-item-object-custom menu-item-846"><a href="../contact/"><span>Contact</span></a>
                        
                    </li> 
                    <li id="menu-item-842" class="<?php if($page=='mag'){echo 'current-menu-ancestor ';}?>menu-item menu-item-type-custom menu-item-object-custom menu-item-846"><a href="../magazine/"><span>Magazine</span></a>
                        
                    </li>
                    
                </ul>
            </nav>
            <div class="butter-button nav-button visible_menu">
                <div></div>
            </div>
            <div class="header-minicart woocommerce header-minicart-novo">
                <div class="hm-cunt"><i class="basic-ui-icon-profile"></i>
                   <?php
                        if ($_SESSION) {
                            echo '<span style="background:green;"><i style="margin:0;padding-top:3px;" class="fa fa-check"></i></span>';
                        } else {
                            echo '<span><i style="margin:0;padding-top:3px;" class="fa fa-unlink"></i></span>';
                        }
                    ?></div>
                <div class="minicart-wrap">

                    <ul class="cart_list product_list_widget ">
                        <?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<p style="padding: 0;margin:0;">Welcome,</p>';
                                echo  $_SESSION['u_uid'];
                                echo '<a href="../auth/account.php" style="padding: 10px 0px 10px 0px;margin:0;">My Account</a>';
                                if($_SESSION['u_clearance'] > 3){
                                echo '<a href="../auth/post-to-news.php" style="padding: 10px 0px 10px 0px;margin:0;">Post an Update</a>';}
                              echo '<form action="../includes/logout.inc.php" method="post">
                       <input class="wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Logout">
                   </form>';
                                
                            } else {
                                echo '<li class="empty" style="justify-self:start;" id="U-login"><a href="#login">User Sign in</a></li>
                                        <li class="empty" style="justify-self:start;" id="C-login"><a href="#login">Client Portal</a></li>
                                        <li class="empty" style="justify-self:start;" id="signup_"><a href="#signup">Sign Up</a></li>';
                            }
                        ?>
                       

                    </ul>
                    <!-- end product list -->
                   
                </div>
            </div>
<!--            <div class="search-button"><i class="basic-ui-icon-search"></i></div>-->
        </div>
    </div>
</header>
    
   <div class="side-bar-area main-row">
					<div class="close basic-ui-icon-cancel"></div>
					<div class="wrap">
						<div id="text-2" class="widget widget_text"><div class="heading-decor"><h5><span>This Is Deponce.</span></h5></div>			<div class="textwidget"><p>Big business image. Small business relationship.</p>
</div>
		</div><div id="portfolio-2" class="widget widget_portfolio"><div class="heading-decor"><h5><span>Latest Updates</span></h5></div>		<div class="gallery-module row">
						<div class="col-xs-6 col-md-3 item"><a href="../news/"><img width="150" height="150" src="../images/logo_lifeplus.png" class="attachment-thumbnail size-thumbnail" alt="" title="Dazed And Confused" /></a></div>
						
					</div>
		</div><div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="heading-decor"><h5><span>Contact</span></h5></div><div class="textwidget custom-html-widget"><div class="contact-row"><span>Phone:</span> +1 (800) 456 3711</div>
<div class="contact-row"><span>Email:</span> contact@deponce.io</div></div></div>					</div>
											<div class="copyright">© Deponce, 2018.  All Rights Reserved.</div>
									</div>
<!--
							<div class="header-space hide"></div>
							<div class="search-popup main-row">
					<div class="close basic-ui-icon-cancel"></div>
					<div class="centered-container"><form role="search" method="get" class="searchform" action="http://deponce.jacobyclarke.io/testd/" >
	<button type="submit" class="searchsubmit" value=""><i class="basic-ui-icon-search"></i></button>
	<div><input type="text" value="" placeholder="Type and hit enter" name="s" class="input" /></div>
</form></div>
				</div>
-->
<link rel='stylesheet' id='animate-css-css'  href='../plugins/js_composer/assets/lib/bower/animate-css/animate.min8b06.css?ver=5.4.7' type='text/css' media='all' />
				
<!--<script type="text/javascript" src="../plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min8b06.js"></script>				-->
<script type='text/javascript' src='../js/main.js'></script>
<script type='text/javascript' src='../js/scripts972f.js'></script>
<script type='text/javascript' src='../js/nav.js'></script>
<script type='text/javascript' src='../js/js_composer_front.min.js'></script>
<script type='text/javascript' src='../js/skip-link-focus-fix.js'></script>
<script type='text/javascript' src='../js/photoswipe.min.js'></script>
<script type='text/javascript' src='../js/photoswipe-ui-default.min.js'></script>
<script type='text/javascript' src='../js/jquery.flipster.min.js'></script>
<script type='text/javascript' src='../js/selectivizr-min.js'></script>
<script type='text/javascript' src='../js/customizer.js'></script>
<script type='text/javascript' src='../plugins/js_composer/assets/lib/waypoints/wp-embed.min55fe.js'></script>
<script type='text/javascript' src='../plugins/js_composer/assets/lib/waypoints/waypoints.min8b06.js'></script>
<script type='text/javascript' src='../js/login.js'></script>
<script></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"96247e192b51313d847a0f333","lid":"5f706fe5ee","uniqueMethods":true}) })</script>