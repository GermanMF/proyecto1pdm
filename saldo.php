<?php 
    include("servidor/funciones.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/estilo.css" />
</head>

<body class=" grey lighten-2">
    <section id="cont">
            <p style="margin-top: -15%; text-align: center;"><strong>SALDO</strong></p>
                    <p> Tu saldo es de:</p>
                    <input type="text" id = "saldo" name="saldo" value= <?php saldo(); ?>  disabled>
            <div class="row">
                <a href = "operacion.php" class="waves-effect waves-light btn" style=" width: 100%;">Regresar</a>
            </div>
    </section>
</body>

</html>
