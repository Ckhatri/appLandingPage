$(document).ready(function() {
	$("#learnbtn").click(function() {
		$('html, body').animate({
    		scrollTop: $("#welcome").offset().top
		}, 1000);
	});

	$("#downloadbtn").click(function() {
		$('html, body').animate({
    		scrollTop: $("#available").offset().top
		}, 1000);
	});
});