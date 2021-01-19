<?php

require_once('../../usuarios/modelo/usuarios.php');
require_once('../modelo/configuracion.php');

$ModeloUsuario = new Usuarios();
$ModeloUsuario->validateSession();
$ModeloUsuario->validateSessionAdministrator();

$ModeloConfiguracion = new Configuracion();

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
        <h2><b>Nuevo Usuario<b></h2>
        <form method="POST" action="../controlador/addUsuario.php">
            <div class="form-group">
                <label>Nombre de Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" autocomplete="off" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" autocomplete="off" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" autocomplete="off" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Rol</label>
                <select name="rol" required="" class="form-control">
                <option disabled selected="selected">--Seleccione--</option>
                <?php
                $Roles = $ModeloConfiguracion->getRoles();
                if ($Roles != null) {
                    foreach ($Roles as $rol) {
                ?>
                        <option value="<?php echo $rol['idRol'] ?>"><?php echo $rol['nomRol'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            </div>
            <div class="clearfix"></div>

            <button type="submit" class="btn btn-lg btn-success">Crear</button>
        </form>

        <a href="index.php" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
    </div>
</body>

</html>