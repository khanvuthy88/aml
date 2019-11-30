( function( $ ) {
	var plugins = {
		searchIcon: $('.top-search'),
	}
	function showMiniSearch() {
		console.log('Yes clicked');
	}

	$('#mini-head ul li.search').click(function(){
		showMiniSearch();
	});

	if(plugins.searchIcon.length){
		plugins.searchIcon.css('display','none');
	}
})( jQuery );