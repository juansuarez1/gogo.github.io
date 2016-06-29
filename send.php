<?php 
	$destino = "juansuarez.1@outlook.com"
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$message = $_POST['message'];

	$thank ="#contact"

	echo $name. "ha dicho <br/>".$message;
	if(mail($destino, $name, $email, $telefono, $message)){
		Header ("location: index.html");
		echo "mail enviado";
	}else{
		echo "no tiene conexion a un servidor";
	}
 ?>