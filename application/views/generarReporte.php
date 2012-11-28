<html>
<head>
	<title>Reportes</title>
</head>
<body>
	
	<label>Reporte de cursos</label>
	<br/>
	<form action="<?php echo base_url(); ?>index.php/generarReporte/generar_pdf" method="post">		
		<input type="image"  name="imagen" src="<?php echo base_url(); ?>media/pdf-ico.png" width="64" height="64">
	<?php //echo '<a  title="Click aquí para exportar a PDF" href="'.base_url() . '/index.php/reporteMatxCurso/generar_pdf"><img src="'.base_url().'media/pdf-ico.png" alt="PDF" /></a>';?>
    </form>
	

</body>
</html>