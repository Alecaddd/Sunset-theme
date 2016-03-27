jQuery(document).ready( function($){
	//custom Sunset scripts
	
	var carousel = '.sunset-carousel-thumb';
	
	sunset_get_bs_thumbs(carousel);

	$(carousel).on('slid.bs.carousel', function(){
		sunset_get_bs_thumbs(carousel);
	});
	
	function sunset_get_bs_thumbs( carousel ){
	
		$(carousel).each(function(){
			
			var nextThumb = $(this).find('.item.active').find('.next-image-preview').data('image');
			var prevThumb = $(this).find('.item.active').find('.prev-image-preview').data('image');
			$(this).find('.carousel-control.right').find('.thumbnail-container').css({ 'background-image' : 'url('+nextThumb+')' });
			$(this).find('.carousel-control.left').find('.thumbnail-container').css({ 'background-image' : 'url('+prevThumb+')' });
			
		});
		
	}
	
	/* Ajax functions */
	$(document).on('click','.sunset-load-more:not(.loading)', function(){
		
		var that = $(this);
		var page = $(this).data('page');
		var newPage = page+1;
		var ajaxurl = that.data('url');
		
		that.addClass('loading').find('.text').slideUp(320);
		that.find('.sunset-icon').addClass('spin');
		
		$.ajax({
			
			url : ajaxurl,
			type : 'post',
			data : {
				
				page : page,
				action: 'sunset_load_more'
				
			},
			error : function( response ){
				console.log(response);
			},
			success : function( response ){
				
				that.data('page', newPage);
				$('.sunset-posts-container').append( response );
				
				setTimeout(function(){
					
					that.removeClass('loading').find('.text').slideDown(320);
					that.find('.sunset-icon').removeClass('spin');
					
				}, 1000);
				
				
				
			}
			
		});
		
	});
	
});














