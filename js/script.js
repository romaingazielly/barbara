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
		$('body').toggleClass('noscroll');
	});

	// Slider projet Home
	var compteur = 1;
	$('a#next-projet').on('click', function(event) {
		event.preventDefault();
		compteur++;

		//Provisoire
		if(compteur > 7) compteur=1;

		sliderHome(compteur);
	});

	$('a#prev-projet').on('click', function(event) {
		event.preventDefault();
		compteur--;

		//Provisoire
		if(compteur < 1) compteur=7;

		sliderHome(compteur);
	});

	// Changement de projet au scroll (beta)
	// var isScrolling;
	// $('.projet').on('mousewheel', function(event) {
	// 	if (isScrolling == true) return;

	//     if (event.originalEvent.wheelDelta >= 0) {
	//         $('a#prev-projet').trigger('click');
	//     }
	//     else {
	//         $('a#next-projet').trigger('click');
	//     }

	//     isScrolling = true;

	//     console.log(event.originalEvent.wheelDelta, isScrolling)

	    

	//     window.setTimeout(function () {
	//     	isScrolling = false;
	//     }, 1000);
	// });


	headerSmall();
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

function sliderHome(compteur){
	var num = compteur;
	$.getJSON( "projets.json", function(data){
		console.log(num);
		$('.home .projet').attr('id', data.projets[num].id);
		$("#miniature-projet").attr('src', "images/projets/"+ data.projets[num].id +"-mini.png"); // Miniature
		$("#miniature-projet").attr('srcset', "images/projets/"+ data.projets[num].id +"-mini-x2.png x2"); // Miniature x2
		$('#titre-projet').html(data.projets[num].title); // Titre
		$('#subtitle-projet').html(data.projets[num].subtitle);
		$('#num-projet').html(num); // Numérotation
	})
	.done(function(){
		console.log('done!')
	})
	.fail(function(){
		console.log('fail: ')
	});
}

function headerSmall(){
	$('.projets').on('mousewheel', function(event) {
		var t = $(this).scrollTop(70);
		console.log(t)
	});
}