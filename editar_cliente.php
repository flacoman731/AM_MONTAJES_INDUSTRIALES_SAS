<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id='$id'";
$resultado = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Cliente</title>
</head>

<body>

<h2>Editar Cliente</h2>

<form action="actualizar_cliente.php" method="POST">

<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

<label>Nombre:</label>
<br>
<input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">
<br><br>

<label>Telefono:</label>
<br>
<input type="text" name="telefono" value="<?php echo $fila['telefono']; ?>">
<br><br>

<label>Correo:</label>
<br>
<input type="email" name="correo" value="<?php echo $fila['correo']; ?>">
<br><br>

<input type="submit" value="Actualizar">

</form>

</body>
</html>