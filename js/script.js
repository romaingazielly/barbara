var $window = $(window),
	$h = $window.height(),
	$w = $window.width(),
	dataHome;

jQuery(document).ready(function($) {

	// Home
	if( $('.container').hasClass('home') ){
		// Slider


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

	
	// Burger
	$('.burger').on('click', function(){
		$('.sub-head').toggleClass('btn-open');
		$('body').toggleClass('noscroll');
	});

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
	var index = compteur-1;
	$('#num-projet').html(compteur); // Numérotation
	console.log(index);
	//$('.pic-slider').css('transform', 'translate3d(0px, -'+compteur*100+'%, 0px)' );
	TweenLite.to('.pic-slider', .75, {y: '-'+ compteur*100 +'%', onComplete:function(){
			// Redéfini l'ordre
			var curr = $('#pic-next').attr();
			//$('#pic-current').
		}
	});

	$('.home .projet').attr('id', dataHome.projets[index].id);
	$("#miniature-projet").attr('src', '/images/projets/'+ dataHome.projets[index].id +'-mini.png'); // Miniature
	$("#miniature-projet").attr('srcset', '/images/projets/'+ dataHome.projets[index].id +'-mini-x2.png x2'); // Miniature x2
	$('#titre-projet').html(dataHome.projets[index].title); // Titre
	$('#subtitle-projet').html(dataHome.projets[index].subtitle);
	$('.projet-link').attr('href', '/projets/'+ dataHome.projets[index].id +'.php');
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

function setCookie(key, value) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000)); // 24h
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}