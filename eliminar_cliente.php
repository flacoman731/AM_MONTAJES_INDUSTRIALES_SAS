<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id='$id'";
$query = mysqli_query($conexion,$sql);

if($query){
    header("Location: ver_clientes.php");
}else{
    echo "Error al eliminar";
}

?>