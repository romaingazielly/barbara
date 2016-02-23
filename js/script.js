var $window = $(window),
	$h = $window.height(),
	$w = $window.width();

jQuery(document).ready(function($) {

	// Windows
	// Attention s'effectue également sur Tablette et Mobile
	resizeHome();
	$(window).resize(function(){ 
		resizeHome();
	}); 


	// Burger
	$('.burger').on('click', function(){
		$('.burger').toggleClass('btn-open');
	});

	$('a#next-projet').on('click', function(event) {
		event.preventDefault();
		sliderHome();
	});
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

function sliderHome(){
	$.getJSON( "projets/projet-2.json", function(data){
		$("#miniature-projet").attr('src', data.miniature); // Miniature
		$('#titre-projet').html("<span>"+data.projet+"</span>"); // Titre
		$('.preview figure').css("background", "url(../images/projets/projet-"+data.id+"-big.jpg)"); // Preview
		$('#num-projet').html(data.id); // Numérotation
	})
	.done(function(){
		console.log('done!')
	})
	.fail(function(){
		console.log('fail: ')
	});
}