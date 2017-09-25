<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<section id="inner-pages" class="page-404 center-wrapper clearfix">
		<div id="main-banner-404">
			<?php putRevSlider("404-banner") ?> 		
		</div>
		<div class="content-wrapper clearfix">
			<div class="dashboard clearfix">
				<div class="column clearfix">
					<?php 
					if(ICL_LANGUAGE_CODE=='en'): 
						include_once("404-en.php");
					elseif(ICL_LANGUAGE_CODE=='ar'):
						include_once("404-ar.php");
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
