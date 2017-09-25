				<div class="footer-wrapper-inner">
					<div class="footer-top-wrapper clearfix">
						<div class="social_menu float-l">
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
						<div class="footer-logo float-r">
							<a  href="<?php bloginfo('url');?>">
								<img title="<?php bloginfo('name');?>" alt="<?php bloginfo('name');?>" width="138" height="61" src="<?php bloginfo('template_url');?>/images/footer-main-logo.png">
							</a>
						</div>
					</div>
					<div class="footer-menu">
						<div class="footer_full_menu clearfix">
							<div class="grid_cloumn footer_grid section_one float-r">
								<h2>لماذا تختار مباشر تداول</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu One - Arabic', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_two float-r">
								<h2>منصات</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu Two - Arabic', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_three float-r">
								<h2>استمارات و طلبات</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu Three - Arabic', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_four float-r">
								<h2>عن الشركة</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu four - Arabic', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_five float-r">
								<h2>آخر</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu five - Arabic', 'container' => ''));?>
							</div>
							<div class="grid_cloumn footer_grid section_six float-r">
								<h2>اتصل بنا</h2>
								<?php  wp_nav_menu( array('menu' => 'Footer Menu six - Arabic', 'container' => ''));?>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_note"> 
					<p>مباشر تداول هو أسم تجاري مملوك بالكامل لشركة مباشر للخدمات المالية بي إس سي&copy;، وهي شركة استثمارية من الفئة  الأولى تخضع لتنظيم مصرف البحرين المركزي ومدرجة إدراجًا صحيحًا بموجب قوانين مملكة البحرين.جميع الحقوق محفوظة 2016 لشركة <a href="http://institutional.mubashertrade.com/" target="_blank">مباشر للخدمات المالية بي إس سي&copy;</a>, وسيتم حظر أي وصول أو استخدام غير مصرح به .</p>

       		<p class="footer_info">بناء على الاتفاقية الخاصة بك لاستلام واستخدام بيانات السوق ،لأسواق الأسهم (1)نحفظ لك الحق الكامل بجميع بيانات السوق المتاحة(2)لا نضمن هذه البيانات(3)لا نتحمل أي مسئولية عن أي خسارة إما بسبب الإهمال أو لأي سبب خارج إرادتنا استلامك واستخدامك لهذه الخدمة يخضع لشروط وأحكام الاتفاق الخاص بك مع مباشر تداول . <a href="<?php bloginfo('url');?>/privacy-policy/">سياسة الخصوصية</a> | <a href="<?php bloginfo('url');?>/risk-disclosure/">بيان المخاطرة</a> <br>
          <br>
          استلام واستخدام هذه الخدمة الخاصة بك خاضعة لشروط وأحكام الاتفاقية مع مباشر للخدمات المالية.
       		</p>
					<div id="copyright" class="copyright">
						&copy; <?php echo date('Y')?>. جميع الحقوق محفوظة شركة مباشر تداول | <a target="_blank" title="Benworldwide" href="http://benworldwide.com/">Benworldwide</a> | <a title="Feedback" target="_blank" href="http://global.benworldwide.com/contact/site-survey/">تعليقات</a>
					</div>
				</div>
