<html>
<head>	
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Editar Informacion de la empresa</title>
</head>
<body>	
	<?php if (empty($info)) { ?>
		<form action="<?php echo base_url(); ?>index.php/editinfoempresa/Guardar" method="post" accept-charset="UTF-8">
			<div>
				<label>Mision</label><br>
				<textarea name="mision" cols="30" rows="10"><?php echo set_value('mision'); ?></textarea>
				<?php echo form_error('mision'); ?>
			</div>
			<div>
				<label>Vision</label><br>
				<textarea name="vision" cols="30" rows="10"><?php echo set_value('vision'); ?></textarea>
				<?php echo form_error('vision'); ?>
			</div>
			<div>
				<label>Quienes Somos</label><br>
				<textarea name="quienesomos" cols="30" rows="10"><?php echo set_value('quienesomos'); ?></textarea>
				<?php echo form_error('quienesomos'); ?>
			</div>

			<input type="submit" name="boton" value="Guardar">
		</form>
	<?php }else{ 
		foreach ($info as $key) {
	?>
		<form action="<?php echo base_url(); ?>index.php/editinfoempresa/Actualizar" method="post" accept-charset="UTF-8">
			<div>
				<label>Mision</label><br>
				<textarea name="mision" cols="30" rows="10"><?php echo $key->mision;?></textarea>
				<?php echo form_error('mision'); ?>
			</div>
			<div>
				<label>Vision</label><br>
				<textarea name="vision" cols="30" rows="10" ><?php echo $key->vision;?></textarea>
				<?php echo form_error('vision'); ?>
			</div>
			<div>
				<label>Quienes Somos</label><br>
				<textarea name="quienesomos" cols="30" rows="10"><?php echo $key->quieneSomos;?></textarea>
				<?php echo form_error('quienesomos'); ?>
			</div>

			<input type="submit" name="boton" value="Actualizar">
		</form>
	<?php } } ?>

</body>
</html>

