jQuery( document ).ready( function () {
	
    	var images = ["/wp-content/uploads/2017/03/i4.jpg","/wp-content/uploads/2017/03/i8.jpg","/wp-content/uploads/2017/03/i10.jpg","/wp-content/uploads/2017/03/i12.jpg","/wp-content/uploads/2017/03/i14.jpg","/wp-content/uploads/2017/03/i3.jpeg","/wp-content/uploads/2017/03/i2.jpg","/wp-content/uploads/2017/03/i1.jpg"];
        var i = 0;
        jQuery("#f_p_h").css({"background":"url(" + images[i] + ")","background-size":"cover"});
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            jQuery("#f_p_h").css({"background":"url(" + images[i] + ")","background-size":"cover"});
                
        }, 5000);
    
	jQuery( '#scroll-up' ).hide();
	jQuery( function () {
		jQuery( window ).scroll( function () {
			if ( jQuery( this ).scrollTop() > 1000 ) {
				jQuery( '#scroll-up').fadeIn();
			} else {
				jQuery( '#scroll-up' ).fadeOut();
			}
		});
		jQuery( 'a#scroll-up' ).click( function () {
			jQuery( 'body, html' ).animate({
				scrollTop: 0
			}, 800 );
			return false;
		});
	});
});
