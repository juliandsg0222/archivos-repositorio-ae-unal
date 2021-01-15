<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionIndicador = $ModeloConfiguracion->getByIdIndicador($Id);

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
        <h2><b>Actualizar Indicador<b></h2>
        <form method="POST" action="../controlador/editIndicador.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            if($InformacionIndicador != null){
                foreach ($InformacionIndicador as $info) {
        ?>
            <div class="form-group">
                <label>Número de Indicador</label>
                <input type="text" class="form-control" placeholder="Indicador" name="indicador" autocomplete="off" value="<?php echo $info['numInd'] ?>">
            </div>

            <div class="clearfix"></div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" placeholder="Descripción del indicador" name="descripcion" autocomplete="off"><?php echo $info['nomInd'] ?></textarea>
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