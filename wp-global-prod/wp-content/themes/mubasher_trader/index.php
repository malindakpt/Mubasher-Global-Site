<?php get_header(); 
if(ICL_LANGUAGE_CODE=='en'): 
	include_once("index-en.php");
elseif(ICL_LANGUAGE_CODE=='ar'):
	include_once("index-ar.php");
endif;
get_footer(); ?>
