<?php 
	$submit = $_POST["submit-contacto"];
	if (isset($submit)) {
		$destino = "erik.garam@gmail.com";
		$nombre = $_POST["nombre"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];
		$msg = $_POST["mensaje"];

		$mensaje = "De: ".$nombre."<br> Correo: ".$correo."<br> Teléfono: ".$telefono."<br><br><br>".$msg;

		mail($destino, "Correo de erickgarcia.com", $mensaje);

		
	}
 ?>