function isMobile() {
    return /Android|webOS|iPhone|iPod|iPad|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

jQuery( document ).ready(function() {
	
	jQuery(window).scroll(function() { 
		if (jQuery(this).scrollTop() > 200){
            jQuery('.header-wrapper').addClass("sticky"); 
        }else{ 
            jQuery('.header-wrapper').removeClass("sticky"); 
        } 
    }); 
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollToTop').fadeIn();
            jQuery('.zopim').addClass("move-zopim"); 
        } else {
            jQuery('.scrollToTop').fadeOut();
            jQuery('.zopim').removeClass("move-zopim"); 
        }
    });

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 100;
    var delta = 500;
    var navbarHeight = jQuery('header').outerHeight();

    jQuery(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = jQuery(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            jQuery('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + jQuery(window).height() < jQuery(document).height()) {
                jQuery('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        
        lastScrollTop = st;
    }
    
    //Click event to scroll to top
    jQuery('.scrollToTop').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });

	jQuery(".menu-item-960").click(function(){
        jQuery(".menu-item-960 .sub-menu").toggle();
    });
    
    jQuery(".menu-item-964").click(function(){
        jQuery(".menu-item-964 .sub-menu").toggle();
    });
    
    jQuery(".menu-item-970").click(function(){
        jQuery(".menu-item-970 .sub-menu").toggle();
    }); 

    /*======== ARABIC ========*/
    jQuery(".menu-item-1073").click(function(){
        jQuery(".menu-item-1073 .sub-menu").toggle();
    });


    jQuery(".menu-item-1077").click(function(){
        jQuery(".menu-item-1077 .sub-menu").toggle();
    });

    jQuery(".menu-item-1083").click(function(){
        jQuery(".menu-item-1083 .sub-menu").toggle();
    });

    /*======== ARABIC ========*/

    jQuery(".announcement .close").click(function() {
		jQuery('.announcement').slideUp("slow");
		jQuery('#main-banner').removeClass("announcement-space"); 
        jQuery('#mobile-main-banner').removeClass("announcement-space"); 
		// jQuery('#inner-pages').removeClass("announcement-space"); 
		jQuery('#global-icon').removeClass("with-announcement"); 
	});

    var winWidth = jQuery(window).width();
    
    if(winWidth <= 360){
        jQuery('#wmt-box-wrapper').bxSlider({
            minSlides: 1,
            maxSlides: 1,
            controls: false,
            auto: true,
            adaptiveHeight:true,
            pager:true
            // caption:true
        });
    }

    // Scrolling 
    jQuery('.scroll_down a').click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery(jQuery(this).attr('href')).offset().top
        }, 1000);
        return false;
    });

    jQuery('.scroll_down').addClass('animated fadeInUp');

    jQuery('.counter').countUp({
        'time': 2000,
        'delay': 10
    });

    var divs = jQuery(".block-icon");
    for(var i = 0; i < divs.length; i+=3) {
      divs.slice(i, i+3).wrapAll("<div class='block-icon-wrapper clearfix'></div>");
    }
        
    
    jQuery(window).load(function() {
        if( jQuery('html').attr('dir') == 'rtl' ){
                jQuery('[data-vc-full-width="true"]').each( function(i,v){
                    jQuery(this).css('right' , jQuery(this).css('left') ).css( 'left' , 'auto');
                });
            }
    });


    //Executed on page load with URL containing an anchor tag.
    if(jQuery(location.href.split("#")[1])) {
        var target = jQuery('#'+location.href.split("#")[1]);
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: target.offset().top - 120 //offset height of header here too.
            }, 500);
            return false;
        }
    }


    // Replace Home word in arabic
    jQuery(".rtl .breadcrumbs .home").text(function (_, ctx) {
        return ctx.replace("Home", "الرئيسية");
    });

});



