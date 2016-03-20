var $window = $(window),
	$h = $window.height(),
	$w = $window.width(),
	dataHome;

jQuery(document).ready(function($) {

	if( $('.container').hasClass('home') ){
		// Json
		$.getJSON( "projets.json", function(data){
			dataHome = data;
			//$('#total-projet').html(data.projets.length); //si loader
		});

		// Windows
		// Attention s'effectue également sur Tablette et Mobile
		resizeHome();
		$(window).resize(function(){ 
			resizeHome();
		});

		// Slider projet Home
		var compteur = 1;
		$('a#next-projet').on('click', function(event) {
			event.preventDefault();
			compteur++;

			//Provisoire
			if(compteur > 8) compteur=1;

			sliderHome(compteur);
		});

		$('a#prev-projet').on('click', function(event) {
			event.preventDefault();
			compteur--;

			//Provisoire
			if(compteur < 1) compteur=8;

			sliderHome(compteur);
		});

		// Changement de projet au scroll (beta)
		var isScrolling;
		$('.projet').on('mousewheel', function(event) {
			if (isScrolling == true) return;

		    if (event.originalEvent.wheelDelta >= 0) {
		        $('a#prev-projet').trigger('click');
		    }
		    else {
		        $('a#next-projet').trigger('click');
		    }

		    isScrolling = true;

		    console.log(event.originalEvent.wheelDelta, isScrolling)

		    

		    window.setTimeout(function () {
		    	isScrolling = false;
		    }, 1000);
		});

		// Changement du projet au clavier
		$(document).keydown(function(e) {
			switch(e.which) {
		        case 38: $('a#prev-projet').trigger('click'); // up
		        break;

		        case 40: $('a#next-projet').trigger('click'); // down
		        break;

		        default: return;
		    }
		    e.preventDefault();
		});
	}

	// Burger
	$('.burger').on('click', function(){
		$('.sub-head').toggleClass('btn-open');
		$('body').toggleClass('noscroll');
	});

	headerSmall();

	// Projets
	if( $('.container').hasClass('projets') ){

		$('#projet-top').on('click', function(event) {
			event.preventDefault();
			TweenLite.to(window, 2, {scrollTo:{y:0}, ease:Power2.easeOut});
		});

		$(document).scroll(function() {
			headerSmall();
		});
	}
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
	var index = num-1;
	$.getJSON( "projets.json", function(data){
		console.log(num);
		$('.home .projet').attr('id', data.projets[index].id);
		$("#miniature-projet").attr('src', '/images/projets/'+ data.projets[index].id +'-mini.png'); // Miniature
		$("#miniature-projet").attr('srcset', '/images/projets/'+ data.projets[index].id +'-mini-x2.png x2'); // Miniature x2
		$('#titre-projet').html(data.projets[index].title); // Titre
		$('#subtitle-projet').html(data.projets[index].subtitle);
		$('#num-projet').html(num); // Numérotation
		$('.projet-link').attr('href', '/projets/'+ data.projets[index].id +'.php');
	})
	.done(function(){
		console.log('done!')
	})
	.fail(function(){
		console.log('fail: ')
	});
}

function headerSmall(){
	var docScroll = $(document).scrollTop();
	
	if(docScroll > 70){
		$('header').addClass('small');
	}
	else{
		$('header').removeClass('small');
	}
}