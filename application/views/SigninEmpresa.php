<html>
<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Empresa</title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/SigninEmpresa/sign" method="post">
		<div>
			<label>Nombre o Razon Social </label>
			<input type ="text" name="razonSocial" maxlength="70">
			<?php echo form_error('razonSocial'); ?>
		</div>
		<br/>
		<div>
			<label>Nit</label>
			<input type ="text" name="nit" maxlength="20">
			<?php echo form_error('nit'); ?>
		</div>
		<br/>
		<div>
			<label>Representante Legal</label>
			<input type ="text" name="repLegal" maxlength="50">
			<?php echo form_error('repLegal'); ?>
		</div>
		<br/>
		<div>
			<label>Actividad</label>
			<input type ="text" name="actividad" maxlength="100">
			<?php echo form_error('actividad'); ?>
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
			<label>Telefono Fax</label>
			<input type ="text" name="telefonoFax" maxlength="20">
			<?php echo form_error('telefonoFax'); ?>
		</div>
		<br/>
		<div>
			<label>Direccion</label>
			<input type ="text" name="direccion" maxlength="80">
			<?php echo form_error('direccion'); ?>
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
			<input type="submit" name="boton" value="Registrarse"/>
		</div>

	</form>

</body>
</html>