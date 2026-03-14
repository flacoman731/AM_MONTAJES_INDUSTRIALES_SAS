<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Registro de Clientes</title>
</head>

<body>

<h2>Registrar Cliente</h2>

<form action="guardar_cliente.php" method="POST">

<label>Nombre:</label>
<br>
<input type="text" name="nombre" required>
<br><br>

<label>Telefono:</label>
<br>
<input type="text" name="telefono" required>
<br><br>

<label>Correo:</label>
<br>
<input type="email" name="correo" required>
<br><br>

<input type="submit" value="Guardar Cliente">

</form>

</body>
</html>