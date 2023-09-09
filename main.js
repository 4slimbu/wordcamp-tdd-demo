(function($) {
	$(document).ready(function() {
		// Create a div element for the admin notice.
		const adminNotice = $('<div class="notice notice-success is-dismissible" data-testid="wctdd-notice"><p>Let\'s go green with TDD</p><button type="button" class="notice-dismiss"></button></div>');

		// Add the admin notice to the WordPress admin page.
		$('.wrap').prepend(adminNotice);

		// Dismiss the notice when the "Dismiss" button is clicked.
		adminNotice.on('click', '.notice-dismiss', function() {
			adminNotice.hide();
		});
	});
})(jQuery);

