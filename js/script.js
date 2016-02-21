var $window = $(window),
	$h = $window.height(),
	$w = $window.width();

jQuery(document).ready(function($) {

	// Windows
	resizeHome();
	$(window).resize(function(){ 
		resizeHome();
	}); 


	// Burger
	$('.burger').on('click', function(){
		$('.burger').toggleClass('btn-open');
	})
});

function resizeHome() {
	if (document.all) {
		$h=document.body.clientHeight;
		$w=document.body.clientWidth;
	} else {
		$w=window.innerWidth;
		$h=window.innerHeight;
	}
	console.log('window: '+$h, $w);
	$('.home').css({ 'height': $h + 'px' }); // Header
}