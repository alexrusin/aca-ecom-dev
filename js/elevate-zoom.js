(function($){
	$("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif'});
	   $("#zoom_03").bind("click", function(e) {  
	  var ez =   $('#zoom_03').data('elevateZoom');	
		$.fancybox(ez.getGalleryList());
	  return false;
		});
})(jQuery);