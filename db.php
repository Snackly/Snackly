<?php
    //Configuracion de conexion y acceso
    function coon(){
        $hostname = "localhost";
        $usuariodb = "root";
        $passworddb = "";
        $dbname = "pedidos";

        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
        return $conectar;
    }
?>