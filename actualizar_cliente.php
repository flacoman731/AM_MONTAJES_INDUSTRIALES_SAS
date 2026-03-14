<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "UPDATE clientes 
SET nombre='$nombre', telefono='$telefono', correo='$correo'
WHERE id='$id'";

$query = mysqli_query($conexion,$sql);

if($query){
    header("Location: ver_clientes.php");
}else{
    echo "Error al actualizar";
}

?>