<?php
    include '../includes/header-light.php';
    
    if(!$_SESSION) {
        // If there is no session loaded display 403 banner then exit script
        echo '
        <div class="header-space"></div>
        <section class="main-row">
		<div class="container-fluid no-padding">
			<!-- Banner -->
			<div class="banner-area external-indent">
				
				<div class="banner banner-404 white">
					<div class="item tac" style="background-image: url(https://images.pexels.com/photos/158229/lost-places-pforphoto-leave-factory-158229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
					<div class="container">
						<div class="cell middle" style="color: #f0f0f0;">
							<h1 class="b-404-heading"><span>403</span><br>Forbidden</h1>
							<p>Must login to continue.</p>
							<a href="account.php#login" class="button-style1">LOGIN</a>
							<a href="../home" class="button-style1">GET BACK HOME</a>
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
        echo 'logged in';
    }
?>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1505137157448{padding-top: 80px !important;}.vc_custom_1505137671714{height: 64px;width: 100%;float:left;}.vc_custom_1505137671715{/*background-color: #e8e8e8;*/}.vc_custom_1506089730271{overflow-x: scroll;background-color: #f0f0f0 !important;height: 72vh;min-height: 400px;padding: 0px !important; display: block !important;}.vc_custom_1506089730272{background-color: #e8e8e8 !important;float: left;width: 180px;height: 100%; position: absolute; padding-top: 64px;}.vc_custom_1506089730274{padding-left: 180px;}.btn{width: 100%;margin:0px !important;border:none !important;}.viewing{background-color: #f0f0f0}#control{display: none;}@media screen and (max-width:640px){#control{display: block;float: left;position: absolute;}.vc_custom_1506089730272{padding:0px !important;}}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }.hide{display: none;}.fa {cursor: pointer;}</style></noscript>


 <main class="main-row">
    <div class="container">
<!--       <div class="header-space"></div>-->
        <div id="v1" class="vc_row wpb_row vc_row-fluid vc_custom_1505137157448 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex view_ one">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                <div class="vc_column-inner vc_custom_1506089730271" style="padding:0px !important;">
                   <i id="control" class="fa fa-list" style="float:left;padding-left: 20px;padding-top: 20px;font-size: 1.5rem;z-index:1;"></i>
                    <div class="footer-social-button vc_custom_1505137671714">
                        <?php if(isset($_SESSION['u_id'])){
                            echo '<h6 style="text-transform: capitalize;margin:5px;">Welcome, ';
                            echo $_SESSION['u_uid'];
                            echo '</h6>';}?>
                    </div>
                    <div id="left-control-panel" class="vc_column-inner vc_custom_1506089730272" style="padding:64px 0px 0px 0px!important;z-index:1;">
                        <span id="ic" style="float:right;padding-right: 20px;padding-bottom: 10px;font-size: 1.5rem;"></span>
                        <a href="dashboard"><div class="footer-social-button vc_custom_1505137671715 button-style1 btn"><i class="fa fa-th-large"></i>Dashboard</div></a>
                        <a href="profile"><div class="footer-social-button vc_custom_1505137671715 button-style1 btn"><i class="basic-ui-icon-profile"></i>Profile</div></a>
                        <a href="settings"><div class="footer-social-button vc_custom_1505137671715 button-style1 btn"><i class="basic-ui-icon-settings-1"></i>Settings</div></a>
                    </div>
                    <div class="vc_column-inner vc_custom_1506089730274 ajax-container">

                    </div>
                </div>
            </div>
        </div>
     </div>
</main>


<script>
$(document).ready(function(){
    $('.ajax-container').load('../accApp/templates/dashboard.php');
    
    $('#left-control-panel a').click(function(){
        var appContent = $(this).attr('href');
        $('.ajax-container').load('../accApp/templates/' + appContent + '.php');
        return false;
    });
    
        $('#control').click(function(){
            $('#left-control-panel').removeClass('hide');
        });
        $('#ic').click(function(){
            $('#left-control-panel').addClass('hide');
        });
        window.onresize = function(){
            if(window.innerWidth <= 640) {
                $('#left-control-panel').addClass('hide');
                $('#ic').html('<i class="fa fa-close"></i>');
            } 
            
            if(window.innerWidth > 640) {
                $('#left-control-panel').removeClass('hide');
                $('#ic').html(' ');
            }
        };
     
    
});
</script>