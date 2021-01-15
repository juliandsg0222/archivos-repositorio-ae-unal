<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionTema = $ModeloConfiguracion->getByIdTema($Id);

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
        <h2><b>Eliminar Tema<b></h2>
        <form method="POST" action="../controlador/deleteTema.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            if($InformacionTema != null){
                foreach ($InformacionTema as $info) {
        ?>
            <div class="form-group">
                <label>Tema</label>
                <input type="text" class="form-control" placeholder="Tema" name="tema" autocomplete="off" value="<?php echo $info['nomTem'] ?>" disabled>
            </div>

            <div class="clearfix"></div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" placeholder="Descripción de la categoría" name="descripcion" autocomplete="off" disabled><?php echo $info['desTem'] ?></textarea>
            </div>

        <?php
                }
            }
        ?>

            <div class="clearfix"></div>

            <button type="submit" class="btn btn-info btn-lg btn-responsive">Eliminar</button>
        </form>
    </div>
</body>

</html>