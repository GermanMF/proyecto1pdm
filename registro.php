<?php
	include("servidor/conexion.php");
	$cuenta = $_POST['cuenta'];
	$pin = $_POST['pin'];
	$quer = $con -> query("SELECT noCuenta FROM cuenta WHERE noCuenta= '".$cuenta."'");
	if($quer -> num_rows > 0){
		$quer2 = $con -> query ("SELECT idUser, last_access, try, noCuenta, pin FROM cuenta WHERE noCuenta ='".$cuenta."' AND pin='".$pin."'");
		$quer3 = $con ->query ("SELECT noCuenta ,try , block FROM cuenta WHERE noCuenta='".$cuenta."'");
		$rechazados = $quer3 ->fetch_assoc();
		$registros = $quer2 -> fetch_assoc();
		if($rechazados['block'] == 1){
            echo "
                <script language='JavaScript' type='text/javascript'>
                    alert('Ponte en contacto con el administrador del sistema, posoye');
                </script>";
                
		}
		else if($quer2 -> num_rows > 0){
            session_start();
            $_SESSION['user'] = $con -> query ("SELECT nombre,idUser FROM user WHERE idUser =".$registros['idUser']) -> fetch_assoc();
            header("Location: operacion.php");
			$con -> query("UPDATE cuenta set try= 0, last_access = NOW() where noCuenta=".$registros['noCuenta']);
		}
		else{
			if($rechazados['try'] < 2){
				$con -> query("UPDATE cuenta set try =".(++$rechazados['try'])." where noCuenta =".$rechazados['noCuenta']);
                echo "
                <script language='JavaScript' type='text/javascript'>
                    alert('Aguas ya tienes '".$rechazados['try']."' intentos que la riegas');
                </script>";
            }
			else{
                echo "
                <script language='JavaScript' type='text/javascript'>
                    alert('Despidete de tu cuenta, papu B|');
                </script>";
				$con -> query("UPDATE cuenta  set try=0, block=1 where noCuenta=".$rechazados['noCuenta']);
			}
		}
	}
	else{
        echo "
                <script language='JavaScript' type='text/javascript'>
                    alert('No existe ese número de cuenta');
                </script>";
	}
	$con -> close();
?>