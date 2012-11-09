<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/SigninNatural" method="post">
		<div>
			<label> Nombres </label>
			<input type ="text" name="nombre" maxlength="70"> 
			<?php echo form_error('nombre'); ?>
		</div>
		<br/>
		<div>
			<label>Apellidos</label>
			<input type ="text" name="apellido" maxlength="70">
			<?php echo form_error('apellido'); ?>
		</div>
		<br/>
		<div>
			<label>Cedula</label>
			<input type ="text" name="cedula" maxlength="20">
			<?php echo form_error('cedula'); ?>
		</div>
		<br/>
		<div>
			<label>Fecha de Nacimiento</label>
			<input type ="text" name="fechaNac">
			<?php echo form_error('fechaNac'); ?>
		</div>
		<br/>
		<div>
			<label>Sexo</label>
			<input type ="text" name="sexo" maxlength="1">
			<?php echo form_error('sexo'); ?>
		</div>
		<br/>
		<div>
			<label>Direccion</label>
			<input type ="text" name="direccion" maxlength="80">
			<?php echo form_error('direccion'); ?>
		</div>
		<br/>
		<div>
			<label>Pais</label>
			<input type ="text" name="pais" maxlength="30">
			<?php echo form_error('pais'); ?>
		</div>
		<br/>
		<div>
			<label>Telefono</label>
			<input type ="text" name="telefono" maxlength="20">
			<?php echo form_error('telefono'); ?>
		</div>
		<br/>
		<div>
			<label>Celular</label>
			<input type ="text" name="celular" maxlength="20">
			<?php echo form_error('celular'); ?>
		</div>
		<br/>
		<div>
			<label>Correo</label>
			<input type ="text" name="correo" maxlength="60">
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