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
		if(compteur == 4) compteur=1;

		sliderHome(compteur);
	});

	$('a#prev-projet').on('click', function(event) {
		event.preventDefault();
		compteur--;

		//Provisoire
		if(compteur == 0) compteur=4;

		sliderHome(compteur);
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

function sliderHome(compteur){
	var id = compteur;
	$.getJSON( "projets/projet-"+id+".json", function(data){
		console.log(id);
		$("#miniature-projet").attr('src', "images/projets/projet-"+ data.id +"-mini.png"); // Miniature
		$('#titre-projet').html("<span>"+data.projet+"</span>"); // Titre
		$('.preview figure').css("background", "url(../images/projets/projet-"+data.id+"-big.jpg) center center / cover"); // Preview
		$('#num-projet').html(data.id); // Numérotation
	})
	.done(function(){
		console.log('done!')
	})
	.fail(function(){
		console.log('fail: ')
	});
}