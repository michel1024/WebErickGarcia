<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Contactanos | Erick García</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
	<link rel="shorcut icon" href="img/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/fontello.css" />
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet" />
</head>
<body>

	<!-- HEADER Y MENU DE NAVEGACION -->
	<nav class="nav">
		<p class="icon-location location">Medellin - Colombia</p>
		<ul class="ul" id="menu">
			<h1 class="nombre-logo">ERICK GARCÍA</h1>
			<li class="item"><a href="/ErickGarcia" class="link text-black">INICIO</a></li>
			<li class="item"><a href="" class="link text-black">PORTAFOLIO</a></li>
			<li class="item"><a href="" class="link text-black">SERVICIOS</a></li>
			<li class="item"><a href="blog.php" class="link text-black">BLOG</a></li>
			<li class="item"><a href="contacto.php" class="link activo text-black">CONTACTO</a></li>
			<li class="item"><a href="" class="link text-black">ACERCA DE</a></li>
		</ul>
	</nav>
	<div class="icon-hamburger">
		<div class="hamburger"></div>
	</div>

	<div class="banner-contacto">
		<video autoplay muted loop id="myVideo">
		  <source src="img/contacto-video.mp4" type="video/mp4">
		</video>
	</div>

	<h1 class="text-center mt-lg-5">CONTÁCTANOS</h1>

	<div class="contacto">
		<div class="container-form">
			<form action="send-mail.php" method="POST">
				<input class="form-control focus" type="text" id="txtNombre" name="nombre" placeholder="Nombre" />
				<input class="form-control" type="text" id="txtTelefono" name="telefono" placeholder="Teléfono" />
				<input class="form-control" type="email" id="txtCorreo" name="correo" placeholder="Correo electrónico" />
				<textarea class="form-control" rows="6" type="email" id="txtMsg" name="mensaje" placeholder="Mensaje"></textarea>
				<input class="form-control"  type="submit" id="btnSubmit" name="submit-contacto" value="Enviar" />
			</form>
		</div>

		<div class="info-contacto">
			<h1 class="text-center">Información de contacto</h1>
			<img src="img/business.jpeg" alt="" />
			<p><b>Nombre:</b> Erick García</p>
			<p><b>Correo:</b> erik.garam@gmail.com</p>
			<p><b>Teléfono:</b> 3137140227</p>
			<p><b><span class="icon-location"></span></b> Medellín - Colombia</p>

		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>



	<footer class="row">
		<div class="col-lg-6 col-sm-12">
			<p>Copyright &copy; 2018. Erick Garcia Todos los derechos reservados</p>
		</div>
		<div class="col-lg-6 col-sm-12">
			<a href=""><span class="icon-facebook-official"></span></a>
			<a href=""><span class="icon-instagram"></span></a>
			<a href=""><span class="icon-youtube-play"></span></a>
			<a href=""><span class="icon-linkedin-squared"></span></a>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/scroll.js"></script>
</body>
</html>