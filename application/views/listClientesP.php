<html>
<head>
	<title>listado de clientes potenciales</title>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Curso</th>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Telefono</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
                if (isset($consulta)) {
                    foreach ($consulta as $key) {
            ?>
			<tr>
				<td><?php echo $key->id_curso ?></td>
				<td><?php echo $key->cedula ?></td>
				<td><?php echo $key->nombre ?></td>
				<td><?php echo $key->correo ?></td>
				<td><?php echo $key->telefono ?></td>
			</tr>
			<?php
                	}
                }else{
                echo "<br>";
                echo "<br>";
                echo "No se han encontrado Registros";
           		}
                ?>
		</tbody>
	</table>

</body>
</html>