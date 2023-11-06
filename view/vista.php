<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Base de datos: bd_libreria</h1>
	<h1>Tabla: tbl_libro</h1>
	<h1>Jennifer Denisse Garcia Joaquin</h1>
	<h1>Libros disponibles</h1>
	<table border="1" width="1000px">
		<tr>
			<td><strong>Titulo</strong></td>
			<td><strong>ID Autor</strong></td>
			<td><strong>Editorial</strong></td>
			<td><strong>Año</strong></td>
			<td><strong>Genero</strong></td>
			<td><strong>Precio</strong></td>
			<td><strong>Stock</strong></td>
			<td><strong>Portada</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["titulo"]; ?></td>
						<td><?php echo $pd[$i]["id_autor"]; ?></td>
						<td><?php echo $pd[$i]["editorial"]; ?></td>
						<td><?php echo $pd[$i]["anio"]; ?></td>
						<td><?php echo $pd[$i]["genero"]; ?></td>
						<td><?php echo $pd[$i]["precio"]; ?></td>
						<td><?php echo $pd[$i]["stock"]; ?></td>
						<td><?php echo '<img height="200" width= "130" src="data:image/jpg;base64,' . base64_encode($pd[$i]["portada"]) . '"/>' ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>