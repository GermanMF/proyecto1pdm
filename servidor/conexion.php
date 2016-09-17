<?php 
	$user2 = "root";
	$bd = "proyecto1pdm";
	$pw = "123321";
	$serv = "localhost";
	$con = new  mysqli($serv,$user2,$pw,$bd);
	if($con -> errno){echo 'Sin conexón';}
	$con -> set_charset("utf-8");
	// $var = $con -> query("SELECT user.nombre FROM user, cuenta WHERE user.idUser = cuenta.idUser") -> fetch_assoc();
	// echo $var['nombre'];
?>