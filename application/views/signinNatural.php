<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/signinNatural/sign" method="post">
		<div>
			<label> Nombres </label>
			<input type ="text" name="nombre" value="<?php echo set_value('nombre'); ?>" maxlength="70"> 
			<?php echo form_error('nombre'); ?>
		</div>
		<br/>
		<div>
			<label>Apellidos</label>
			<input type ="text" name="apellido" value="<?php echo set_value('apellido'); ?>" maxlength="70">
			<?php echo form_error('apellido'); ?>
		</div>
		<br/>
		<div>
			<label>Cedula</label>
			<input type ="text" name="cedula" value="<?php echo set_value('cedula'); ?>" maxlength="20">
			<?php echo form_error('cedula'); ?>
		</div>
		<br/>
		<div>
			<label>Fecha de Nacimiento</label>
			<input type ="text" name="fechaNac" value="<?php echo set_value('fechaNac'); ?>">
			<?php echo form_error('fechaNac'); ?>
		</div>
		<br/>
		<div>
			<label>Sexo</label>
			<input type ="text" name="sexo" value="<?php echo set_value('sexo'); ?>" maxlength="1">
			<?php echo form_error('sexo'); ?>
		</div>
		<br/>
		<div>
			<label>Direccion</label>
			<input type ="text" name="direccion" value="<?php echo set_value('direccion'); ?>" maxlength="80">
			<?php echo form_error('direccion'); ?>
		</div>
		<br/>
		<div>
			<label>Pais</label>
			<input type ="text" name="pais" value="<?php echo set_value('pais'); ?>" maxlength="30">
			<?php echo form_error('pais'); ?>
		</div>
		<br/>
		<div>
			<label>Telefono</label>
			<input type ="text" name="telefono" value="<?php echo set_value('telefono'); ?>" maxlength="20">
			<?php echo form_error('telefono'); ?>
		</div>
		<br/>
		<div>
			<label>Celular</label>
			<input type ="text" name="celular" value="<?php echo set_value('celular'); ?>" maxlength="20">
			<?php echo form_error('celular'); ?>
		</div>
		<br/>
		<div>
			<label>Correo</label>
			<input type ="text" name="correo" value="<?php echo set_value('correo'); ?>" maxlength="60">
			<?php echo form_error('correo'); ?>
		</div>
		<br/>
		<div>
			<label>Contrase&ntildea</label>
			<input type ="password" name="password" maxlength="20">
			<?php echo form_error('password'); ?>
		</div>
		<br/>
		<div>
			<label>Verificar Contrase&ntildea</label>
			<input type ="password" name="passwordC" maxlength="20">
			<?php echo form_error('passwordC'); ?>
		</div>
		<br/>
		<div>
			<input type="submit" value="Registrarse"/>
	</form>
</body>
</html>