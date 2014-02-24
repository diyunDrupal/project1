// ------------------------------------------------------------
// Quick Tabs deep linking work around
// ------------------------------------------------------------
function quicktabs_deep_links () {
	// ------------------------------------------------------------
	// Quick Tabs deep linking work around
	// ------------------------------------------------------------
	jQuery('.quicktabs-tabs a').each(function(){
		// Unbind the quick tabs action
		jQuery(this).unbind('click');

		// Refresh page whenever the tab is clicked
		jQuery(this).click(function(){
			window.location.href = $(this).attr('href');
		});
	});
}
