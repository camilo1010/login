<html>
<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Listado de cursos</title>
</head>
<body>
	<h2>Listado de cursos</h2>
	
	<table border="1">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
                if (isset($result2)) {
                    foreach ($result2 as $curso) {
            ?>
						<tr>
							<td><?php echo $curso->nombre ?></td>
							<td>
								<form action="<?php echo base_url(); ?>index.php/editarcurso" method="post">
									<input type="hidden" name="id" value="<?php echo $curso->id; ?>"/>
									<input type="submit" name="boton" value="Editar">
								</form>								
								<form action="<?php echo base_url(); ?>index.php/consultaCurso" method="post">
									<input type="hidden" name="id" value="<?php echo $curso->id; ?>"/>
									<input type="submit" name="boton" value="Consulta">
								</form>
								<label><?php echo $curso->estado ?></label>								
								<form action="<?php echo base_url(); ?>index.php/eliminarCurso" method="post">
									<input type="hidden" name="id" value="<?php echo $curso->id; ?>"/>
									<input type="submit" name="boton" value="Eliminar">
								</form>
								<form action="<?php echo base_url(); ?>index.php/reporteMatxCurso" method="post">
									<input type="hidden" name="id" value="<?php echo $curso->id; ?>"/>
									<input type="submit" name="boton" value="Reporte">
								</form>
								<form action="<?php echo base_url(); ?>index.php/reporteDetallado" method="post">
									<input type="hidden" name="id" value="<?php echo $curso->id; ?>"/>
									<input type="submit" name="boton" value="Reporte detallado">
								</form>
							</td>
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