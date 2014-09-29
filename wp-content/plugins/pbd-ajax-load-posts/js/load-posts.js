jQuery(document).ready(function($) {

	// The number of the next page to load (/page/x/).
	var pageNum = parseInt(pbd_alp.startPage) + 1;
	
	// The maximum number of pages the current query can return.
	var max = parseInt(pbd_alp.maxPages);
	
	// The link of the next page of posts.
	var nextLink = pbd_alp.nextLink;
	
	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('.archive_list').after('<section class="pbd-alp-placeholder-'+ pageNum +' archive_list"></section>');
		$('.more_download').prepend('<a href="#" class="button" id="pbd-alp-load-posts">Load More</a>');
			
		// Remove the traditional navigation.
		$('.navigation').remove();
	}
	
	
	/**
	 * Load new posts when the link is clicked.
	 */
	$('#pbd-alp-load-posts').click(function() {
	
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading...');
			
			$('.pbd-alp-placeholder-'+ pageNum).load(nextLink + ' article',
				function() {
					// Update page number and nextLink.
					pageNum++;
					nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
					
					// Add a new placeholder, for when user clicks again.
					$('#pbd-alp-load-posts').before('<section class="pbd-alp-placeholder-'+ pageNum +' archive_list"></section>');
					
					// Update the button message.
					if(pageNum <= max) {
						$('#pbd-alp-load-posts').html('Load More');
					} else {
						$('#pbd-alp-load-posts').html('All Loaded');
					}
				}
			);
		} else {
			$('#pbd-alp-load-posts').append('.');
		}	
		
		return false;
	});
});