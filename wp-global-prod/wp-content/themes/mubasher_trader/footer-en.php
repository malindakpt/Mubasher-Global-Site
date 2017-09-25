				<div class="footer-wrapper-inner">
					<div class="footer-top-wrapper clearfix">
						<div class="footer-logo float-l">
							<a  href="<?php bloginfo('url');?>">
								<img title="<?php bloginfo('name');?>" alt="<?php bloginfo('name');?>" width="138" height="61" src="<?php bloginfo('template_url');?>/images/footer-main-logo.png">
							</a>
						</div>
						<div class="social_menu float-r">
							<ul>
								<li>
									<a target="_blank" href="<?php $facebookURL = get_post_meta(1989, 'Facebook URL', false); foreach($facebookURL as $facebookURL) { echo $facebookURL; } ?>" class="facebook social-media"></a>
								</li>
								<li>
									<a target="_blank" href="<?php $twitterURL = get_post_meta(1989, 'Twitter URL', false); foreach($twitterURL as $twitterURL) { echo $twitterURL; } ?>" class="twitter social-media"></a>
								</li>
								<li>
									<a target="_blank" href="<?php $linkedinURL = get_post_meta(1989, 'Linkedin URL', false); foreach($linkedinURL as $linkedinURL) { echo $linkedinURL; } ?>" class="linkedin social-media"></a>
								</li>
								<li>
									<a target="_blank" href="<?php $youtubeURL = get_post_meta(1989, 'Youtube Channel URL', false); foreach($youtubeURL as $youtubeURL) { echo $youtubeURL; } ?>" class="youtube social-media"></a>
									</li>		
							</ul>
						</div>
					</div>
					<div class="footer-menu">
						<div class="footer_full_menu clearfix">
							<div class="grid_cloumn footer_grid section_one float-l">
								<h2>Why MubasherTrade</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu One', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_two float-l">
								<h2>Platforms</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu Two', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_three float-l">
								<h2>Forms and Applications</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu Three', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_four float-l">
								<h2>About Us</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu four', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_five float-l">
								<h2>Other</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu five', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_six float-l">
								<h2>Contact Us</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu six', 'container' => ''));?>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_note"> 
					<p>MubasherTrade is a trading name of Mubasher Financial Services BSC &copy;. Mubasher Financial Services BSC &copy; is an investment business firm licensed as Category 1 by the Central Bank of Bahrain.&copy; Copyright <?php echo date('Y')?> <a href="http://institutional.mubashertrade.com/" target="_blank">Mubasher Financial Services BSC &copy;</a>.All rights reserved.</p>

       		<p class="footer_info">As your agreement for the receipt and use of market data provides, the securities markets (1) reserve all rights to the market data that they make available; (2) do not guarantee that data; and (3) shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control. <a href="<?php bloginfo('url');?>/privacy-policy/">Privacy Policy</a> | <a href="<?php bloginfo('url');?>/risk-disclosure">Risk Disclosure</a> <br>
          <br>
          Your receipt and use of this service is subject to the terms and conditions of your agreement with Mubasher Financial Services Bsc.
       		</p>
					<div id="copyright" class="copyright">
						&copy; <?php echo date('Y')?>. Mubasher Trade All Rights Reserved | <a target="_blank" title="Benworldwide" href="http://benworldwide.com/">Benworldwide</a> | <a title="Feedback" target="_blank" href="http://global.benworldwide.com/contact/site-survey/">Feedback</a>
					</div>
				</div>
