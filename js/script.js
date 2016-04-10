var $window = $(window),
	$h = $window.height(),
	$w = $window.width(),
	dataHome;
	var lastCompteur;
		var memory = [];

jQuery(document).ready(function($) {

	// Home
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

	// About
	if( $('.container').hasClass('about') ){


		$('#go-top').on('click', function(event) {
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
	console.log(compteur);
	$('.home .projet').attr('id', dataHome.projets[index].id);
	$('#miniature-projet').html('<img src="/images/projets/'+ dataHome.projets[index].id +'-mini.png" srcset="/images/projets/'+ dataHome.projets[index].id +'-mini-x2.png 2x" alt="'+ dataHome.projets[index].title +'" />');
	$('#titre-projet').html(dataHome.projets[index].title); // Titre
	$('#subtitle-projet').html(dataHome.projets[index].subtitle);
	$('#num-projet').html(compteur); // Numérotation
	$('.projet-infos a').attr('href', '/projets/'+ dataHome.projets[index].id +'.php')
						.attr('title', dataHome.projets[index].name);

	// Si 1 -> 8
	memory.push(compteur);
	lastCompteur = memory[memory.length - 2];
	//console.log(memory, lastCompteur);


	// if(compteur == 8){
	// 	TweenLite.fromTo( $('.pic-slider'), .85, {y:'800%'}, {y:'0'} );
	// }

	TweenLite.to($('.pic-slider'), 2,{y: '-'+index*100+'%', ease:Power3.easeOut, onComplete:function(){
		//alert('complete');
	}});
	//TweenLite.fromTo( $('#pic-balle-au-bond'), 2, {css: {opacity:1}}, { css:{opacity:0} });
	//TweenLite.fromTo( $('#pic-saupiquet'), 9, {css: {opacity:0}}, { css:{opacity:1} });
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