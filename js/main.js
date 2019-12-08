( function( $ ) {
	var plugins = {
		searchIcon: $('.top-search'),
		miniHead: $('.mini-head'),
		masthead: $('#masthead'),
		homeslide: $('#home-slide'),
		singlePageThumb: $('div.show_background_image'),
		screenHeight: $(window).height()
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
	if(plugins.homeslide.length){
		if(device.mobile() === false){
			let screenHeight = plugins.homeslide.height();
			plugins.homeslide.css('height', screenHeight + 'px');
		}
	}
	if(plugins.singlePageThumb.length){
		console.log($(window).width());
		if(device.mobile() === false && $(window).width() <= 1349){
			plugins.singlePageThumb.css('height', plugins.screenHeight + 'px');
		}
	}
})( jQuery );