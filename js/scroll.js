$(window).ready(function(){
	var height = $(window).height();
	$('.cont-serv-2').hide();	
	$(window).scroll(function(){	
	var ancho = $(this).width();
	var scrollTop = $(this).scrollTop();
	var px = scrollTop * 0.08;
	
	if (ancho > 1000) {
		if (scrollTop >= 400) {
			$('.ul').addClass('nav-fixed');
			$('a.link').css({"color":"#000"});
			$('.nombre-logo').addClass('color-logo');

		}else{
			$('.ul').removeClass('nav-fixed');
			$('a.link').css({"color":"#ffffff"});
			$('.nombre-logo').removeClass('color-logo');
			
			
		}
	}

	$('.ventana, .banner-blog, .banner-contacto, #particles-js').css({
		"background-position":"0 -"+px+"px"
	});
	if (scrollTop >= 50) {

		$('.cont-serv-1').animate({
			"left":"0",
			"opacity":"1"
		}, 2000);
	}
	if (scrollTop >= 1200) {
		$('.cont-serv-2').show(1000);
		$('.descripcion-cont-2').animate({
			"margin-top":"0",
			"opacity":"1"
		}, 1500);
	}
		


		
	});
});