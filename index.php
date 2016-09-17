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
        <form id="form1" class="col s12" action="registro.php" method="post" enctype="application/x-www-form-urlencoded" name="login_form">
            <p style="margin-top: -15%; text-align: center;"><strong>LOGIN</strong></p>
            <div class="column">
                <div class="input-field row s6">
                    <input type="text" class="validate" id="cuenta" name = "cuenta">
                    <label> Número de cuenta </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field row s6">
                    <input type="password" class="validate" id="pin" name = "pin" maxlength="4" required>
                    <label>PIN</label>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" style=" width: 100%;">Ingresar<i class="mdi-action-lock-open right"></i></button>
            </div>
        </form>
    </section>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>