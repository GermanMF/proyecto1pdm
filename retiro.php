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
     <form id="form1" class="col s12" action="servidor/funciones.php" method="post" enctype="application/x-www-form-urlencoded" name="login_form">
            <p style="margin-top: -15%; text-align: center;"><strong>RETIRO</strong></p>
            <div class="column">
                 
                 <p> Tu saldo es de:</p>
                    <input type="number" id = "saldo" name="saldo" value= <?php saldo(); ?>  disabled>

                <div class="input-field row s6">
                    <input type="number" class="validate" id="retiro" name = "retiro" min="0"  required>
              
                    <label> Monto a retirar </label>
                </div>
            </div>
            <div class="row">
                <div class = "col s6">
                    <button class="btn waves-effect waves-light" type="submit" style=" width: 100%;">Ingresar<i class="mdi-action-lock-open right"></i></button>
                </div>
                <div class = "col s6">
                    <a href = "operacion.php" class="waves-effect waves-light btn" style=" width: 100%;">Regresar</a>
                </div>
            </div>
        </form>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#retiro").attr({
                "max" : $("#saldo").attr("value");
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
