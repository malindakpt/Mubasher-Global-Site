<?php
get_header();

	if ( have_posts() ) : while ( have_posts() ) : the_post();
		//$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
		<!-- <section id="banner-header" class="" style="background-image: url(<?php //echo $src[0]; ?> ) !important;background-repeat:no-repeat;background-size: cover;background-position:center;"></section> -->

		<section id="inner-pages" class="center-wrapper clearfix topspace">
			<div class="content-wrapper clearfix">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
				<h1 class="page-header"><?php the_title();?></h1>
				<?php the_content(); ?>
			</div>
		</section>	
		<?php
		 endwhile;
	endif; ?>
<?php get_footer(); ?>
<a href="#" class="scrollToTop"></a>
