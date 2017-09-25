<?php
/*
	Template Name: Press Releases
 */

get_header();?>
	<section id="inner-pages" class="center-wrapper clearfix topspace">
			<div class="content-wrapper clearfix">
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
						<?php if(function_exists('bcn_display'))
						{
						bcn_display();
						}?>
					</div>
					<h1 class="page-header"><?php the_title();?></h1>
				<div class="releases-left">
					<?php $args = array( 'post_type' => 'post', 'cat' => '10', 'orderby' => 'date', 'order' => 'DESC','showposts' => '-1');
					$wp_query = new WP_Query($args);

					while (have_posts() ) : the_post(); ?>
					<!-- the_content();  -->
					<div class="releases-section">
						<div class="date-and-formats">
							<div class="date-box updated">
								<?php 
								$country_field = get_post_meta($post->ID, 'country_field', true);
								echo $country_field; the_time('l, F j, Y'); ?>
							</div>
						</div>

						<div class="releases clearfix ">
								<div class="releases-txt">
									<a class="releases-title" href="<?php the_permalink() ?>">
										<?php the_title() ?>
									</a>
									<div class="releases-des">
										<?php 
											// echo string_shorten('Long Text','Shorten lenth');
											//the_content();
										//echo string_shorten( get_the_content(), '100', '' ); 
											the_content_limit(200);?>  
										<div class="view-full-post float-r">
											<a href="<?php the_permalink() ?>" class="view-full-post-btn">Read More</a>
										</div>
									</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
		</div>
	</section>
<?php get_footer(); ?>
<a href="#" class="scrollToTop"></a>
