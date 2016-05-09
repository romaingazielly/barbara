var $window = $(window),
	$h = $window.height(),
	$w = $window.width(),
	dataHome;
	var lastCompteur;
	var memory = [];

// Smooth loading
$(window).load(function() {
	$('body').css('opacity', 1);
});

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
		resizePage('home');
		$(window).resize(function(){ 
			resizePage('home');
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
		    }, 1500);
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

		// Test Ajax
		$('.projet-link').on('click', function(event) {
			event.preventDefault();
			
			var a = $(this);
			var url = a.attr('href');

			history.pushState({key : 'value'}, 'titre', url); // Changement de l'URL
			$.get(url, function(data) {
				var body = $('body');
				body.fadeOut('400', function() {
					body.html(data);
					body.removeClass();
					body.addClass('page-projet'); // A dynamiser
					body.fadeIn('400');
				});
			});
		});

		window.onpopstate = function(event) {
			if(event.state == null){
				document.location.href = '/';
			}
		}
	}

	// Projets
	if( $('body').hasClass('page-projet') ){


		$('#projet-top').on('click', function(event) {
			event.preventDefault();
			TweenLite.to(window, 2, {scrollTo:{y:0}, ease:Power2.easeOut});
		});

		$(document).scroll(function() {
			headerSmall();
		});

		// Changement du projet au clavier
		$(document).keydown(function(e) {
			switch(e.which) {
		        case 37: $('#projet-prev')[0].click(); // left
		        break;

		        case 39: $('#projet-next')[0].click(); // right
		        break;

		        default: return;
		    }
		    e.preventDefault();
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

	// Moodboard
	if( $('.container').hasClass('moodboard') ){
		//resizePage('moodboard');
		// $(window).resize(function(){ 
		// 	resizePage('moodboard');
		// });
		$('#lightgallery').on('onSlideItemLoad.lg',function(event){
		    $('#prev').on('click', function(event){
				$('.lg-actions .lg-prev').trigger('click');
			});
		});
	}

	
	// Burger
	$('.burger').on('click', function(){
		$('.sub-head').toggleClass('btn-open');
		$('body').toggleClass('noscroll');
	});

	headerSmall();
});

function resizePage(page) {
	console.log(page);
	if (document.all) {
		$h=document.body.clientHeight;
		$w=document.body.clientWidth;
	} else {
		$w=window.innerWidth;
		$h=window.innerHeight;
	}
	
	var footer = $('footer');
	var footH = 0;
	if(footer.length) {
		footH = footer.height();
	}

	$('.'+page).css({ 'height': $h - footH + 'px' }); // Header
}

function sliderHome(compteur){
	var index = compteur-1;
	$('.home .projet').attr('id', dataHome.projets[index].id); // Ajout l'id du projet pour le CSS

	// Changements des infos
	$('#miniature-projet').html('<img src="/images/projets/'+ dataHome.projets[index].id + '/' + dataHome.projets[index].id +'-mini.png" srcset="/images/projets/'+ dataHome.projets[index].id + '/'+ dataHome.projets[index].id +'-mini-x2.png 2x" alt="'+ dataHome.projets[index].title +'" />');
	$('#titre-projet').html(dataHome.projets[index].title); // Titre
	$('#subtitle-projet').html(dataHome.projets[index].subtitle);
	$('#num-projet').html(compteur); // Numérotation
	$('.projet-infos a').attr('href', '/projets/'+ dataHome.projets[index].id)
	 					.attr('title', dataHome.projets[index].name);
	// Animations
	TweenLite.fromTo( $('#miniature-projet'), 2, {marginTop:70, autoAlpha:0}, {marginTop:0, autoAlpha:1});
	TweenLite.fromTo( $('#titre-projet'), 1, {autoAlpha:0}, {autoAlpha:1});
	TweenLite.fromTo( $('#subtitle-projet'), 1, {autoAlpha:0}, {autoAlpha:1});

	// Si 1 -> 8
	memory.push(compteur);
	lastCompteur = memory[memory.length - 2];

	TweenLite.to($('.pic-slider'), 2,{y: '-'+index*100+'%', ease:Power3.easeOut, onComplete:function(){
		//alert('complete');
	}});
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