<?php

require_once('../../usuarios/modelo/usuarios.php');
require_once('../modelo/configuracion.php');

$ModeloUsuario = new Usuarios();
$ModeloUsuario->validateSession();
$ModeloUsuario->validateSessionAdministrator();

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionUsuario = $ModeloConfiguracion->getByIdUsuario($Id);

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
        <h2><b>Actualizar Usuario<b></h2>
        <form method="POST" action="../controlador/editUsuario.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            if($InformacionUsuario != null){
                foreach ($InformacionUsuario as $info) {
        ?>


            <div class="form-group">
                <label>Nombre de Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" autocomplete="off" value="<?php echo $info['usuUsu'] ?>" disabled required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" autocomplete="off" value="<?php echo $info['nomUsu'] ?>" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" autocomplete="off" value="<?php echo $info['passUsu'] ?>" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Rol</label>
                <select name="rol" required="" class="form-control">
                <option disabled>--Seleccione--</option>
                <?php
                $Roles = $ModeloConfiguracion->getRoles();
                if ($Roles != null) {
                    foreach ($Roles as $rol) {
                        $nameRol = $rol['idRol'];
                        $namoRol = $rol['nomRol'];
                        if($nameRol == $info['rolUsu']){
                ?>
                        <option value="<?php echo $nameRol?>" selected='selected'><?php echo $namoRol?></option>
                <?php
                        }else{
                ?>
                        <option value="<?php echo $nameRol?>"><?php echo $namoRol?></option>
                <?php
                        }
                    }
                }
                ?>
            </select>
            </div>

            <?php
                }
            }
            ?>

            <div class="clearfix"></div>

            <button type="submit" class="btn btn-lg btn-success">Actualizar</button>
        </form>

        <a href="index.php" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
    </div>
</body>

</html>