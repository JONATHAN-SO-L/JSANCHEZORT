<?php

if(isset($_POST['enviar'])){

	$name=$_POST['nombre'];
	$email=$_POST['email'];
	$message=$_POST['mensaje'];

	$destinatario="sanceznarval00@outlook.com";
	$asunto=utf8_decode("Contacto para trabajo realizado mediante tu página de internet");
	$cuerpo= utf8_decode("Te ha contactado:  ".$name."\n\nCon el correo:  ".$email."\n\nEste es su mensaje: \n\n".$message);

	mail($destinatario, $asunto, $cuerpo);

	echo "<script>alert('¡TU CORREO SE HA ENVIADO CON ÉXITO!')</script>";

	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/">';

}

?>