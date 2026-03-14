<?php
include("conexion.php");

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de Clientes</title>
</head>

<body>

<h2>Clientes registrados</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Correo</th>
<th>Acciones</th>
</tr>

<?php while($fila = mysqli_fetch_array($resultado)){ ?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<a href="editar_cliente.php?id=<?php echo $fila['id']; ?>">Editar</a> |
<a href="eliminar_cliente.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
</td>

<?php } ?>

</table>

</body>
</html>