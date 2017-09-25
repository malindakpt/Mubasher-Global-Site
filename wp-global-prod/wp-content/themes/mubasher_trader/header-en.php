<header class="header-wrapper nav-down" id="header">
										<!--<div class="announcement">
											<div class="close">✕</div>
											<div class="announcement-text" style="font-size: 14px !important; display:block !important;"><!--<span style="font-weight:bold">US Independence Day :</span>Dear Valued Client,
Eid Mubarak, we would like to inform you that our customer service department will be closed on Thursday 31 August 2017 and will resume work on Monday 4th of September 2017.

											</div>
										</div>-->

	<div id="global-icon" class="no-with-announcement"> 
		<a href="http://www.mubashertrade.com/?home=1">Select Region</a>
	</div>
	<div class="center-wrapper clearfix">
		<!-- main logo -->
		<section id="main-logo" class="float-l clearfix">
			<div class="logo">
				<a  href="<?php bloginfo('url');?>">
					<img title="<?php bloginfo('name');?>" alt="<?php bloginfo('name');?>-logo" width="198" height="96" src="<?php bloginfo('template_url');?>/images/main-logo-en.png">
				</a>
				<!-- <div class="logo-bottom-txt">Global</div> -->
			</div>
		</section>
		<!-- EOF main logo -->
		<div id="mobile-lang-switcher" class="float-r">
			<?php do_action('wpml_add_language_selector'); ?>
		</div>

		<!-- Main menu -->
		<section class="nav_container float-r clearfix">
			<div class="nav-top-wrapper float-r clearfix">
				<div id="lang-switcher">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
				<div class="login-btn">
					<a href="https://mtplus-global.mubashertrade.com/#/public/login">Login</a>
				</div>
				<!--div class="account-btn">
					<a href="<?php bloginfo('url');?>/equities">Open a Live Account</a>
				</div-->
				<div class="account-btn">
					<a href="http://trdgm-uat2.mubashertrade.com/USR_MFS_UAT/main.s?method=contactInfoView&lang=en">Try Free demo</a>
				</div>
			</div>
			<div class="header-menu float-r clearfix">
				<nav id="menu-wrapper" class="overlay-menu">
					<?php wp_nav_menu( array('menu' => 'Main' )); ?>
				</nav>
			</div>
		</section>
		<!-- EOF main menu -->
	</div>
</header>
