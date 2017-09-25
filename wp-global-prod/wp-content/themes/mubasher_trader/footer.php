	<footer>
		<section class="center-wrapper clearfix">
			<div id="footer-wrapper" class="clearfix">
				<?php if(ICL_LANGUAGE_CODE=='en'): 
					include_once("footer-en.php");
				elseif(ICL_LANGUAGE_CODE=='ar'):
					include_once("footer-ar.php");
				endif;?>
			</div>
		</section>
	</footer>

<?php wp_footer(); ?>
<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){
	z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	$.src='//v2.zopim.com/?458wGlYJ6OQDnaIgBUJzkjUXCEdG9a8M';z.t=+new Date;$.
	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	<!--End of Zopim Live Chat Script-->
</body>
</html>
