<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Administrador</title>
  </head>
  <body>
    <h1>Home</h1>
    <h2>Welcome <?php echo $username." ".$permiso; ?>!</h2>
    <br />
    <a href="<?php echo base_url(); ?>index.php/CrearCurso">Crear Curso</a>
    <br />
    <a href="">administrar la informacion de la empresa</a>
    <br />
    <a href="home/logout">Logout</a>
  </body>
</html>
