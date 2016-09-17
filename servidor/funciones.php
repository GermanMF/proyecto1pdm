<?php 
	function retiro($monto){

	}

	function deposito(){

	}

	function transferencia(){

	}

	function cambiar(){

	}

	function saldo(){
		session_start();
		include("conexion.php");
		
		$cons = $con -> query("SELECT saldo FROM cuenta WHERE idUser = ".$_SESSION['user']['idUser']) -> fetch_assoc();
		echo $cons['saldo'];
	}


?>