<html>
<head>
	<title>Reporte detallado</title>
</head>
<body>
	<label>Reporte de personas matriculadas</label>
	<br/>
	<form action="<?php echo base_url(); ?>index.php/reporteDetallado/generar_pdf" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<input type="image"  name="imagen" src="<?php echo base_url(); ?>media/pdf-ico.png" width="64" height="64">
    </form>

</body>
</html>