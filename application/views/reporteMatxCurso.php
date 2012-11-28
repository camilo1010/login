<html>
<head>
	<title>Reporte</title>
</head>
<body>
	<label>Reporte de personas matriculadas</label>
	<br/>
	<form action="<?php echo base_url(); ?>index.php/reporteMatxCurso/generar_pdf" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<input type="image"  name="imagen" src="<?php echo base_url(); ?>media/pdf-ico.png" width="64" height="64">
	<?php //echo '<a  title="Click aquí para exportar a PDF" href="'.base_url() . '/index.php/reporteMatxCurso/generar_pdf"><img src="'.base_url().'media/pdf-ico.png" alt="PDF" /></a>';?>
    </form>
</body>
</html>