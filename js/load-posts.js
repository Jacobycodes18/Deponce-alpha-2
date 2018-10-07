jQuery(document).ready(function($) {
	jQuery('.load-button a').each(function() {
		var pageNum = parseInt(jQuery(this).attr('data-start-page')) + 1,
			max = parseInt(jQuery(this).attr('data-max')),
			nextLink = jQuery(this).attr('data-next-link'),
			load_wrap = jQuery(jQuery(this).attr('data-wrap'));

		if(pageNum > max) {
			//jQuery(this).parent().remove();
		}

		jQuery(this).on('click', function() {
			jQuery(this).parent().before('<div class="load-items-area load-items-'+ pageNum +'"></div>');

			var button = jQuery(this);
			button.addClass('loading');

			var $items = load_wrap.next('.load-items-'+ parseInt(pageNum)).find('article');

			load_wrap.next('.load-items-'+ pageNum).load(nextLink + ' ' + jQuery(this).attr('data-wrap') + ' article',
				function() {
					var $html = jQuery(this).find('article');
					load_wrap.append( $html );
					var load_s = jQuery(this);
					
					

					load_wrap.imagesLoaded( function() {
						load_s.remove();
						load_wrap.isotope( 'appended', $html );
						button.removeClass('loading');
						jQuery(window).trigger('resize').trigger('scroll');
					});

					pageNum++;
					nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
				}
			);

			if(pageNum >= max) {
				jQuery(this).parent().fadeOut();
			}

			setTimeout(function() {jQuery(window).trigger('resize').trigger('scroll');}, 500);
			
			return false;
		});
	});
});