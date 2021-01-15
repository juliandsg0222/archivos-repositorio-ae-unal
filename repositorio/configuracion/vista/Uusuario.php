<?php

require_once('../modelo/configuracion.php');

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
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" autocomplete="off" value="<?php echo $info['usuUsu'] ?>" disabled>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" autocomplete="off" value="<?php echo $info['nomUsu'] ?>">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" autocomplete="off" value="<?php echo $info['passUsu'] ?>">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Rol</label>
                <select name="rol" required="" class="form-control">
                <option>--Seleccione--</option>
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

            <button type="submit" class="btn btn-info btn-lg btn-responsive">Actualizar</button>
        </form>
    </div>
</body>

</html>