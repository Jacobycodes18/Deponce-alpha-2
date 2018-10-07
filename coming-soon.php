<title>Deponce | Coming Soon</title>
   <?php
    include('includes/header-one.php');
//    require_once 'includes/subscribe_.php';
?>
<!-- html content -->

									
<!--								main content 	-->

<section class="main-row">
	<div class="container-fluid no-padding">
		<!-- Banner -->
		<div class="banner-area external-indent">
			<div class="banner-social-buttons">
			    <div class="links">
			    							<a href="#" class="item"><i class="fa fa-facebook"></i> <span>Facebook</span></a><a href="#" class="item"><i class="fa fa-instagram"></i> <span>Instagram</span></a><a href="#" class="item"><i class="fa fa-twitter"></i> <span>Twitter</span></a>								    </div>
			</div>
			<div class="banner banner-coming-soon white">
				<div class="item tac" style="background-image: url(images/building-in-miami-Full.png)">
				<div class="container">
					<div class="cell middle">
													<div id="countdown" class="countdown-5af09dc0b0b87 medium"></div>
												<h1 class="b-coming-heading">coming soon</h1>
													<p>Subscribe and get the latest updates</p>
							<div class="tac"><div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="coming-soon.php" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="5" />
<input type="hidden" name="_wpcf7_version" value="5.0.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
</div>
<div class="subscribe-form"><input name="sub" type="submit" value="subscribe" class="wpcf7-form-control wpcf7-submit button-style1" />
<div><span class="wpcf7-form-control-wrap mail"><input type="text" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" aria-required="true" aria-invalid="false" placeholder="Enter your e-mail" /></span></div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
											</div>
				</div>
			</div>
		</div>
		<!-- END Banner -->
	</div>
</section>

<!--								main content 	-->
<script type='text/javascript'>
jQuery(document).ready(function(jQuery) {
	  	/*------------------------------------------------------------------
		[ Coming soon countdown ]
		*/

		var ts = new Date(2019, 00, 00, 00, 00);

		if(jQuery('.countdown-5af09dc0b0b87').length > 0){
			jQuery('.countdown-5af09dc0b0b87').countdown({
				timestamp	: ts,
				callback	: function(days, hours, minutes, seconds){
				}
			});
		}
	});
</script>
<script type='text/javascript' src='js/jquery.countdown.js'></script>
<!--! html content -->
<?php
    include('includes/footer.php');
?>  