
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Completado</title>
    <link rel="stylesheet" href="css/PCStyle.css">
</head>
<body>

    <?php
        include_once("db.php");
        $nombre = $_POST['nam'];
        $cantidad = $_POST['can'];

        $precio = 25 * $cantidad;
        $fecha = date('d/m/y');

        $conectar = coon();//ejecuta la conexion a la d b
        $sql = "INSERT INTO `pedidos_papas`(`Nombre`, `Cantidad`, `Fecha`) 
        VALUES ('$nombre','$cantidad','$fecha')";
        $result = mysqli_query($conectar, $sql) or trigger_error("Querry Failed! SQL - Error: ", mysqli_error($conectar));
    ?>

    <div class = "con">
            <div class="cab">
                <img src="Imagenes/Logo4.png" width="30%">
            </div>
    </div>

    <center>
        <div class="cont">
            <br><br><br><br><br><br>
            <h3>Tu pedido a sido completado</h3><br>
            <h3>El total a pagar es de:<?php echo " $", $precio,".00", " ", "pesos"; ?></h3><br>
            <h3>Gracias por tu compra <?php echo $nombre; ?></h3><br><br><br>
            <form action="Inicio.php">
                <input type="submit" value="Volver" class="btnvolver"><br><br><br><br><br>
            </form>
        </div>
    </center>

    <footer class="foot1">
        <div class="Foot">
            <br><br>
            <h3>Me Botaneas</h3>
            <br><br>
        </div>
    </footer>
    
</body>
</html>
