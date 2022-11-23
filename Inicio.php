<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/InicioEstilo1.css">
    <title>Snackly</title>
</head>
<body class="body">
    <div class="Contenedor">
        <header>
            <div class="cab">
                <img src="Imagenes/Logo4.png" width="30%">
            </div>
            <div class="Control">
                <div class="SHCP">
                    <a href="https://www.facebook.com/profile.php?id=100087464726263"class="BotonTienda">¡Contactanos!</a>
                </div>
            </div>
        </header>

        <div class="SeccionCompras">
            <Label>Menu</Label>
        </div>
        
        <div class="con">
            <form action="ConeccionDB.php" method="post">
                <div class="I1">
                    <img src="Imagenes/papas.jpeg" width="750px" height="400px"><br>
                    <Label class="d1">Papas 100g por envase y salsa a solo $25.00</Label><br>
                    <Label class="d1">Ingresa la cantidad:</Label>
                    <input type="text" class="Cant2" name="can"><br>
                    <Label class="d1">Ingresa tu nombre:</Label>
                    <input type="text" class="Cant2" name="nam"><br>
                    <input type="submit" class="c1" value="Hacer Pedido">
                </div><br>
            </form>

           <form action="ConeccionDB2.php" method="post">
            <div class="I2">
                <img src="Imagenes/salsa.jpeg" width="750px" height="400px"><br>
                <Label class="d1">Salsa 50g por envase a solo $20.00</Label><br>
                <Label class="d1">Ingresa la cantidad:</Label>
                <input type="text" class="Cant2" name="can2"><br>
                <Label class="d1">Ingresa tu nombre:</Label>
                <input type="text" class="Cant2" name="nam2"><br>
                <input type="submit" class="c1" value="Hacer Pedido">
            </div><br>
           </form>
        </div>

        <footer class="fot">
            
            <div class="con6">
                <div class="x1">
                    <Label class="x">
                        <br><br><br><br>
                        Gracias por su compra
                    </Label>    
                </div>
            </div>
        </footer>
    </div>
</body>
</html>