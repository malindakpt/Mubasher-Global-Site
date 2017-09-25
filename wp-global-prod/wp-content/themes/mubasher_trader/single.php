<?php


get_header();

	if( have_posts() ) : while ( have_posts() ) : the_post();

		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

		<section id="inner-pages" class="center-wrapper clearfix topspace">
			<div class="content-wrapper clearfix">
				<h1 class="blog-page-header"><?php the_title() ?></h1>
				<div class="releases-single float-l">
					<div class="blog-des-details">
						<div class="date-and-formats">
							<div class="date-box updated">
								<?php the_time('l, F j, Y'); ?>
							</div>
						</div>
						<?php if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); 
						?>
						<div class="releases-image">
							<a href='<?php the_permalink() ?>' class="post-image" style="background-image: url(<?php echo $src[0]; ?> ) !important;background-repeat:no-repeat;background-size: cover;background-position:center;">
							</a>
						</div>
						<?php }?>
						<?php the_content(); ?>
					</div>
				</div>
				<div id="sidebar" class="float-r clearfix">
					<?php if(ICL_LANGUAGE_CODE=='en'): ?>
						<h2 class="widget-title"><a href="<?php bloginfo('url');?>/press_releases/">News</a></h2>
					<?php elseif(ICL_LANGUAGE_CODE=='ar'): ?>
						<h2 class="widget-title"><a href="<?php bloginfo('url');?>/press_releases/">الأخبار</a></h2>
					<?php endif;
					get_sidebar(); ?>
				</div>
			</div>
		</section>

	<?php endwhile;
	endif;
get_footer(); ?>
<a href="#" class="scrollToTop"></a>