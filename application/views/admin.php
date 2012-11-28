<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
    <title>Administrador</title>
  </head>
  <body>
    <h1>Home</h1>
    <h2>Welcome <?php echo $username." ".$permiso; ?>!</h2>
    <br />
    <a href="<?php echo base_url(); ?>index.php/CrearCurso">Crear Curso</a>
    <br />
    <a href="<?php echo base_url(); ?>index.php/listCursos">Listado de cursos</a>
    <br />
    <a href="<?php echo base_url(); ?>index.php/listClientesP">Listado de clientes potenciales</a>
    <br />
    <a href="<?php echo base_url(); ?>index.php/editinfoempresa">Administrar la informacion de la empresa</a>
    <br />
    <a href="<?php echo base_url(); ?>index.php/GenerarReporte">Generar reportes</a>
    <br />
    <a href="home/logout">Logout</a>
  </body>
</html>
