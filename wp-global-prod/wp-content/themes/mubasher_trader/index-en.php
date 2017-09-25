	<section id="main-banner" class="no-announcement-space">
		<?php putRevSlider("home-banner") ?>
	</section>
	<section id="mobile-main-banner" class="no-announcement-space">
		<?php putRevSlider("home-mobile-banner") ?>
		<div class="controlls">
	  	<a class="scroll_down" href="#section_trade"></a>
	  </div>
	</section>
	<section class="center-wrapper mobile-view">
		<div class="global-market clearfix">
			<div id="section_trade" class="trade-invest float-l ">
				<?php $tradeBlock = get_post_meta(1989, 'Trade Block', false); foreach($tradeBlock as $tradeBlock) { echo $tradeBlock; } ?>
				<div id="count-num">
					<span class="counter"><?php $tradeCounter = get_post_meta(1989, 'Trade Counter', false); foreach($tradeCounter as $tradeCounter) { echo $tradeCounter; } ?></span><br/>
					<span class="count-bottom-txt">Symbols and counting</span>
				</div>
				<div class="view-btn">
					<a href="http://trdgm-uat2.mubashertrade.com/USR_MFS_UAT/main.s?method=contactInfoView&lang=en">Try Free demo</a>
				</div>
			</div>	
			<div id="start-trading" class="global-market-summery-video float-r clearfix">
				<div class="video-wrapper clearfix">
					<iframe width="100%" height="352" src="<?php $videoURL = get_post_meta(1989, 'Video URL', false); foreach($videoURL as $videoURL) { echo $videoURL; } ?>" frameborder="0" allowfullscreen></iframe> 
					<div class="mobile-btn view-btn">
						<?php $accountButton = get_post_meta(1989, 'Account Button', false); foreach($accountButton as $accountButton) { echo $accountButton; } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="why-mubasher-trade">
		<div class="center-wrapper clearfix">
			<h2>Why MubasherTrade</h2>
			<div id="wmt-box-wrapper">
				<a class="wmt-box float-l" href="<?php bloginfo('url');?>/why-mubashertrade/#wmt-mult-asset">
					<span class="wmt-icon mult-asset"></span>
						<?php $block_01 = get_post_meta(11, 'Block_01', false); 
						foreach($block_01 as $block_01) {
							echo $block_01;
						} ?>
				</a>
				<a class="wmt-box float-l" href="<?php bloginfo('url');?>/why-mubashertrade/#wmt-safety">
					<span class="wmt-icon markets"></span>
						<?php $block_02 = get_post_meta(11, 'Block_02', false); 
						foreach($block_02 as $block_02) {
								echo $block_02;
						} ?>
				</a>
				<a class="wmt-box float-l" href="<?php bloginfo('url');?>/why-mubashertrade/#wmt-fx-spreads">
					<span class="wmt-icon fx-spreads"></span>
						<?php $block_03 = get_post_meta(11, 'Block_03', false); 
						foreach($block_03 as $block_03) {
							echo $block_03;
						} ?>
				</a>
				<a class="wmt-box float-l" href="<?php bloginfo('url');?>/why-mubashertrade/#wmt-comprehensive-content">
					<span class="wmt-icon comprehensive-content"></span>
						<?php $block_04 = get_post_meta(11, 'Block_04', false); 
						foreach($block_04 as $block_04) {
							echo $block_04;
						} ?>
				</a>
				<a class="wmt-box float-l" href="<?php bloginfo('url');?>/why-mubashertrade/#wmt-winning">
					<span class="wmt-icon winning"></span>
						<?php $block_05 = get_post_meta(11, 'Block_05', false); 
						foreach($block_05 as $block_05) {
							echo $block_05;
						} ?>
				</a>
				<a class="wmt-box float-l" href="<?php bloginfo('url');?>/why-mubashertrade/#wmt-live-support">
					<span class="wmt-icon live-support"></span>
						<?php $block_06 = get_post_meta(11, 'Block_06', false); 
						foreach($block_06 as $block_06) {
							echo $block_06;
						} ?>
				</a>
			</div>
		</div>
	</section>
	<section  class="center-wrapper mobile-view">
		<div class="mt-platform clearfix">
			<div class="mt-platform-wrapper">
				<div class="platform-txt float-l">
					<div class="platform-txt-wrapper float-l">
						<?php $tradeWith = get_post_meta(1989, 'Trade With Us Block', false); foreach($tradeWith as $tradeWith) { echo $tradeWith; } ?>

						<div id="main-banner" class="read-more-btn" style="float: left; padding: 0 115px 20px 7px;">
							
							<!--?php $tradeButton = get_post_meta(1989, 'Trade Button', false); foreach($tradeButton as $tradeButton) { echo $tradeButton; } ?-->

							<!--?php $tryButton = get_post_meta(1989, 'Try Button', false); foreach($tryButton as $tryButton) { echo $tryButton; } ?-->
							<a href="<?php bloginfo('url');?>/equities">Open a Live Account</a>
						</div>	

						<div id="mobile-main-banner" class="read-more-btn">
							<?php $tradeButton = get_post_meta(1989, 'Trade Button', false); foreach($tradeButton as $tradeButton) { echo $tradeButton; } ?>
						</div>					

						<div class="mt-browser-icon">
							<span class="browser-icon chrom"></span>
							<span class="browser-icon firefox"></span>
							<span class="browser-icon interntx-explor"></span>
							<span class="browser-icon safari"></span>
						</div>
						<?php $storeBadges = get_post_meta(1989, 'Store Badges', false); foreach($storeBadges as $storeBadges) { echo $storeBadges; } ?>
						<div class="mt-os-icon">
							<span class="os-icon window"></span>
							<span class="os-icon imac"></span>
						</div>
					</div>
					<div class="platform-image float-r" style="background-image: url(<?php bloginfo('template_url');?>/images/platform-bg.jpg) !important; background-repeat:no-repeat;background-position:center center; background-size: cover;"> </div>
				</div>
				<div class="call-back-request float-r clearfix"> 
					<iframe src="https://callback.mubashertrade.com/Register.aspx?language=en-US&bc=egdbfs" scrolling="no" width="100%" height="505" frameborder="0"></iframe> 
				</div>
			</div>
		</div>
	</section>