<?php session_start() ?>
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
        <p style="margin-top: -15%; text-align: center;"><strong>OPERACIONES</strong></p>
        <p style = "text-align: center;"><?php echo "Bienvenido ".$_SESSION['user']['nombre'];?></p>
        <div class="row">
            <div class = "row">
            <a href="retiro.php" class="waves-effect waves-light btn" style=" width: 100%;">Retiro</a>
            </div>
            <div class = "row">
            <a href = "deposito.php" class="waves-effect waves-light btn" style=" width: 100%;">Depósito</a>
            </div>
            <div class = "row">
            <a href = "transferencia.php" class="waves-effect waves-light btn" style=" width: 100%;">Transferencia</a>
            </div>
            <div class = "row">
            <a href = "cambiar.php" class="waves-effect waves-light btn" style=" width: 100%;">Cambiar PIN</a>
            </div>
            <div class = "row">
            <a href = "saldo.php" class="waves-effect waves-light btn" style=" width: 100%;">Saldo</a>
            </div>
            <div class = "row">
            <form action= "servidor/salir.php">
            <button type = "submit" class="waves-effect waves-light btn red accent-4" style="margin-left: 22%;">Salir</a>
            </form>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
