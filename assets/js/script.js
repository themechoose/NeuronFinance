/**
*****************************************
* main.js
*
* JQUERY FILE FOR CUSTOM JS AND ACTIVE JS
*
*****************************************
**/



/**
***********************************************
* Table of contents
***********************************************
*
* 1. Nice Select JS
**/

(function ($) {
    "use strict";
	
	// document ready function
	// ============================================
    jQuery(document).ready(function ($) {
        
		
		// owl carouse
			$('.all-client-logo').owlCarousel({
				items:5,
				lazyLoad:true,
				loop:true,
				autoplay:true,
				autoplayTimeout:5000,
				margin:10,
				autoplayHoverPause:true,
				responsive: {
                  0: {
                    items: 1
                  },
                  280: {
                    items: 1
                  },
                  320: {
                    items: 2
                  },
                  640: {
                    items: 3
                  },
                  960: {
                    items: 4
                  },
                  1200: {
                    items: 5
                  }
                }
			});
			
			$('.slider-area').owlCarousel({
				items: 1,
				loop: true, 
				autoplay: true,
				dots: true,
				nav: true,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
			});
			
			// homepage slider animation support
			$(".slider-area").on("translate.owl.carousel", function(){
				$(".slider-content h1, .slider-content p").removeClass("animated fadeInUp").css({'opacity':'0'});
				$(".slider-content a").removeClass("animated fadeInDown").css({'opacity':'0'});
			});
			
			$(".slider-area").on("translated.owl.carousel", function(){
				$(".slider-content h1, .slider-content p").addClass("animated fadeInUp").css({'opacity':'0'});
				$(".slider-content a").addClass("animated fadeInDown").css({'opacity':'0'});
			});
		

			/* ======= Pre Loader ======= */
			$('#loading').fadeOut();



	        /* ======= Contact Form ======= */
	        $('#contactForm').on('submit',function(e){

	            e.preventDefault();

	            var $action = $(this).prop('action');
	            var $data = $(this).serialize();
	            var $this = $(this);

	            $this.prevAll('.alert').remove();

	            $.post( $action, $data, function( data ) {

	                if( data.response=='error' ){

	                    $this.before( '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> '+data.message+'</div>' );
	                }

	                if( data.response=='success' ){

	                    $this.before( '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-thumbs-o-up"></i> '+data.message+'</div>' );
	                    $this.find('input, textarea').val('');
	                }

	            }, "json");

	        });

		
    });

}(jQuery));