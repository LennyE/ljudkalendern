/**
 * showhide-div.js 
 */

$(window).load(function(){
$(document).ready(function() {

	// Hide the "view" div.
	$('#first').hide();
	$('#second').hide();
	$('#third').hide();
	// Watch for clicks on the "slide" link.
	
	$('span.slide1').click(function() {
		// When clicked, toggle the "view" div.
		$('#second').hide();
		$('#third').hide();
		$('#first').slideToggle(300, function() {

			//if ($(this).is(":visible")) $('span.slide > a').text('hide Disc');
			//else $('span.slide > a').text('Disclaimer-1');

		});
		return false;
	});
	$('span.slide2').click(function() {
		// When clicked, toggle the "view" div.
		$('#first').hide();
		$('#third').hide();
		$('#second').slideToggle(300, function() {

			//if ($(this).is(":visible")) $('span.slide1 > a').text('hide Behavior');
			//else $('span.slide1 > a').text('Behavior');

		});
		return false;
	});
	$('span.slide3').click(function() {
		// When clicked, toggle the "view" div.
		$('#first').hide();
		$('#second').hide();
		$('#third').slideToggle(300, function() {

			//if ($(this).is(":visible")) $('span.slide1 > a').text('hide Behavior');
			//else $('span.slide1 > a').text('Behavior');

		});
		return false;
	});

});
});//]]>  
