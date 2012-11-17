<html>
<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Editar Curso</title>
</head>
<body>
	<h2>Editar Curso</h2>
	<form action="<?php echo base_url(); ?>index.php/editarcurso/curso" method="post">
		<?php if (isset($error)) {?>
			<label>Valor invalido en estado</label>
		<?php } ?>
		<div>
			<h3><?php echo $nombre ?></h3>
			<input type="hidden" name="nombre" value="<?php echo $nombre; ?>"/>
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="hidden" name="Estado" value="<?php echo $Estado; ?>">
		</div>
		<div>
			<label>Estado</label>			
			<select name="Estado">
				<option value="<?php echo $Estado; ?>" style="color:red";><?php echo $Estado ?></option>
				<option value="abierto">Abierto</option>
				<option value="cancelado">Cancelado</option>
				<option value="cerrado">Cerrado</option>
			</select>
			<?php echo form_error('Estado'); ?>
		</div>
		<div>
			<label>Descripcion Basica</label>
			<br/>
			<textarea name="descBasica" cols="30" rows="10" ><?php echo $descBasica; ?></textarea>
			<?php echo form_error('descBasica'); ?>
		</div>
		<div>
			<label>Descripcion detallada</label>
			<br/>
			<label>Objetivo</label>
			<br/>
			<textarea name="objetivo" cols="30" rows="10"><?php echo $objetivo; ?></textarea>
			<?php echo form_error('objetivo'); ?>
		</div>
		<div>
			<label>Justificacion</label>
			<br/>
			<textarea name="justificacion" cols="30" rows="10"><?php echo $justificacion; ?></textarea>
			<?php echo form_error('justificacion'); ?>
		</div>
		<div>
			<label>Facilitadores</label>
			<br/>
			<textarea name="facilitadores" cols="30" rows="10"><?php echo $facilitadores; ?></textarea>
			<?php echo form_error('facilitadores'); ?>
		</div>
		


		<input type="submit" name="boton" value="Aceptar">
	</form>

</body>
</html>