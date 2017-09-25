<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="description" itemprop="description" content="" />
	<meta name="keywords" itemprop="keywords" content="" />

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!--?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--?php endif; ?-->


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(ICL_LANGUAGE_CODE=='en'): 
	include_once("header-en.php");
elseif(ICL_LANGUAGE_CODE=='ar'):
	include_once("header-ar.php");
endif;?>
