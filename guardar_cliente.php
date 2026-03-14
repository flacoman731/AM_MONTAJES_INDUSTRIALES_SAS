<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "INSERT INTO clientes (nombre, telefono, correo) 
VALUES ('$nombre','$telefono','$correo')";

$query = mysqli_query($conexion,$sql);

if($query){
    echo "Cliente guardado correctamente";
}else{
    echo "Error al guardar";
}

?>