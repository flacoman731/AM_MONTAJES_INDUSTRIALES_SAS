<?php

$conexion = mysqli_connect("localhost","root","","cotizacion_am_montajes");

if(!$conexion){
    echo "Error en la conexión";
}else{
    echo "Conexión exitosa a la base de datos";
}

?>