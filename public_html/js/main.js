$(document).ready(function() {

	// Activate heading animations on scroll
	$('#web').waypoint(function() {
		$('#web').addClass('zoomIn');
	}, {offset: '80%'});

	$('#design').waypoint(function() {
		$('#design').addClass('zoomIn');
	}, {offset: '80%'});

	$('#stand').waypoint(function() {
		$('#stand').addClass('bounceInDown');
	}, {offset: '95%'});

	// hide elements on page load
	$('#law').css('opacity', 0);

	$('#lawText').css('opacity', 0);

	$('#landscapeText').css('opacity', 0);

	$('#landscape').css('opacity', 0);

	$('#restaurant').css('opacity', 0);

	$('#restaurantText').css('opacity', 0);

	//Animate objects as they appear on screen
	$('#law').waypoint(function() {
		$('#law').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#lawText').waypoint(function() {
		$('#lawText').addClass('fadeInRight');
	}, {offset: '80%'});

	$('#landscapeText').waypoint(function() {
		$('#landscapeText').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#landscape').waypoint(function() {
		$('#landscape').addClass('fadeInRight');
	}, {offset: '80%'});

	$('#restaurant').waypoint(function() {
		$('#restaurant').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#restaurantText').waypoint(function() {
		$('#restaurantText').addClass('fadeInRight');
	}, {offset: '80%'});

});
