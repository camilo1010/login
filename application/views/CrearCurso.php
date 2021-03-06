<html>
<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Crear curso</title>	
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/CrearCurso/curso" method="post">
		<div>
			<label>Nombre curso</label>
			<input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>" maxlength="120">
			<?php echo form_error('nombre'); ?>
		</div>
		<div>
			<label>Estado</label>
			<input type="text" name="estado" value="Abierto" readonly="true">				
			<?php echo form_error(''); ?>
		</div>
		<div>
			<label>Fecha de inicio informativa</label>
			<input type="date" name="fechaIniInfo"  value="<?php echo set_value('fechaIniInfo'); ?>">
			<?php echo form_error('fechaIniInfo'); ?>
		</div>
		<div>
			<label>Fecha de cierre informativa</label>
			<input type="date" name="fechaFinInfo" value="<?php echo set_value('fechaFinInfo'); ?>">
			<?php echo form_error('fechaFinInfo'); ?>
		</div>
		<div>
			<label>Fecha inscripcion</label>
			<input type="date" name="fechaIniInscripcion" value="<?php echo set_value('fechaIniInscripcion'); ?>">
			<?php echo form_error('fechaIniInscripcion'); ?>
		</div>
		<div>
			<label>Fecha fin de inscripcion</label>
			<input type="date" name="fechaFinInscripcion" value="<?php echo set_value('fechaFinInscripcion'); ?>">
			<?php echo form_error('fechaFinInscripcion'); ?>
		</div>
		<div>
			<label>Fecha inicio del curso</label>
			<input type="date" name="fechaIniCurso" value="<?php echo set_value('fechaIniCurso'); ?>">
			<?php echo form_error('fechaIniCurso'); ?>
		</div>
		<div>
			<label>Fecha fin del curso</label>
			<input type="date" name="fechaFinCurso" value="<?php echo set_value('fechaFinCurso'); ?>">
			<?php echo form_error('fechaFinCurso'); ?>
		</div>		
		<div>
			<label>Descripcion Basica</label>
			<br/>
			<textarea name="descBasica" cols="30" rows="10"><?php echo set_value('descBasica'); ?></textarea>
			<?php echo form_error('descBasica'); ?>
		</div>
		<label>Descripcion detallada</label>
		<div>
			<label>Objetivo</label>
			<input type="text" name="objetivo" value="<?php echo set_value('objetivo'); ?>">
			<?php echo form_error('objetivo'); ?>
		</div>
		<div>
			<label>Justificacion</label>
			<input type="text" name="justificacion" value="<?php echo set_value('justificacion'); ?>">
			<?php echo form_error('justificacion'); ?>
		</div>
		<div>
			<label>Facilitadores</label>
			<br>
			<textarea name="facilitadores" cols="30" rows="10"><?php echo set_value('facilitadores'); ?></textarea>
			<?php echo form_error('facilitadores'); ?>
		</div>
		<input type="submit" name="boton" value="Aceptar">
	</form>

</body>
</html>