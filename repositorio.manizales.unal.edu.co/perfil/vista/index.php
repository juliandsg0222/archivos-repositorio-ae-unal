<?php

require_once('../../usuarios/modelo/usuarios.php');


$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();
$Id = $ModeloUsuarios->getId();

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="../../estilos/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../estilos/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="../../estilos/css/Cusuario.css">
    <title>Repositorio de Autoevaluación - Universidad Nacional de Colombia</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2><b>Información Personal<b></h2>
        <form method="POST" action="../controlador/perfil.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            ;
        ?>
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" autocomplete="off" value="<?php echo $ModeloUsuarios->getNick() ?>" disabled>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" autocomplete="off" value="<?php echo $ModeloUsuarios->getNombre() ?>" disabled>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Rol en el Sistema</label>
                <input type="text" class="form-control" placeholder="Rol" name="rol" autocomplete="off" value="<?php echo $ModeloUsuarios->getPerfil() ?>" disabled>
            </div>
            
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Nueva Contraseña</label>
                <input type="password" class="form-control" placeholder="Escriba su nueva contraseña" name="contrasena" autocomplete="off" required="" minlength="8">
            </div>
            
            <div class="clearfix"></div>

            <button type="submit" class="btn btn-lg btn-success">Actualizar Contraseña</button>
        </form>

        <a href="../../home/vista/index.php" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>

    </div>
</body>

</html>