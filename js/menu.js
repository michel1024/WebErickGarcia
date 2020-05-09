$(document).ready(function(){
	
	var abrir = 1;
	$('.icon-hamburger').click(function(){
		
		if (abrir == 1) {
			$('.nav').animate({
				"left":"0",
				"opacity":"1",
				"z-index":"3000"
			});

			abrir = 0;
		}else{
			abrir = 1;
			$('.nav').animate({
				"left":"-100%",
				"opacity":"0",
				"z-index":"-2000"
			});
		}

		$('.icon-hamburger').toggleClass('icon-menu-active');
	});
	

	$('.cont-load').animate({
		"display":"none",
		"z-index":"-5000",
		"opacity":"0"
	});

	$('.logo-main').animate({
		"opacity":"1"
	}, 2000);

	$('.item').animate({
		"margin-top":"0",
		"opacity":"1"
		}, 1200);

});