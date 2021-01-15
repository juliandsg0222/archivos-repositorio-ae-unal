<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionCategoria = $ModeloConfiguracion->getByIdCategoria($Id);

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
        <h2><b>Eliminar Categoría<b></h2>
        <form method="POST" action="../controlador/deleteCategoria.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            if($InformacionCategoria != null){
                foreach ($InformacionCategoria as $info) {
        ?>
            <div class="form-group">
                <label>Categoría</label>
                <input type="text" class="form-control" placeholder="Categoría" name="categoria" autocomplete="off" value="<?php echo $info['nomCat'] ?>" disabled>
            </div>

            <div class="clearfix"></div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" placeholder="Descripción de la categoría" name="descripcion" autocomplete="off" disabled><?php echo $info['desCat'] ?></textarea>
            </div>

        <?php
                }
            }
        ?>

            <div class="clearfix"></div>

            <button type="submit" class="btn btn-lg btn-danger">Eliminar</button>
        </form>

        <a href="index.php" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
    </div>
</body>

</html>