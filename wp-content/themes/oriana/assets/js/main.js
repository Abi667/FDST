jQuery(document).ready(function() {
    jQuery('.toggle-faq h4').each(function() {
        var tis = jQuery(this), state = false, answer = tis.next('p').slideUp();
        tis.click(function() {
            state = !state;
            answer.slideToggle(state);
            tis.parent(".toggle-faq").toggleClass('active',state);
        });
    });

    jQuery(".testimonial-slider").owlCarousel({
        items : 3,
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        itemsCustom : false,
        itemsDesktop : [1120,3],
        itemsTablet: [1024,2],
        itemsTabletSmall: [768,1],
        itemsMobile : [479,1]
    });

    jQuery(".testimonial-slider .owl-buttons .owl-prev").addClass("icon-angle-left").text("");
    jQuery(".testimonial-slider .owl-buttons .owl-next").addClass("icon-angle-right").text("");


	var slideshow_speed = jQuery("#slideshow_speed").val();
	var animation_speed = jQuery("#animation_speed").val();
	var autoscroll = jQuery("#autoscroll").val();
	if(autoscroll=='yes') { 
		var autoplay = slideshow_speed;
	}
	else {
		var autoplay = false;
	}	

    jQuery(".top-slider").owlCarousel({
        navigation : false,
        pagination : true,
        slideSpeed : animation_speed,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay:autoplay,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX'
    });
	
    jQuery('.mobile-click').click(function() {
        if(jQuery('.menu-top-mobile').hasClass('close')) { 
            jQuery('.menu-top-mobile').removeClass('close').addClass('open');
        } else { 
            jQuery('.menu-top-mobile').removeClass('open').addClass('close');
        }
    });	
	
});
