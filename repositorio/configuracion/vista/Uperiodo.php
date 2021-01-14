<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionPeriodo = $ModeloConfiguracion->getByIdPeriodo($Id);

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
        <h2><b>Actualizar Período Académico<b></h2>
        <form method="POST" action="../controlador/editPeriodo.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            if($InformacionPeriodo != null){
                foreach ($InformacionPeriodo as $info) {
        ?>
            <div class="form-group">
                <label>Período</label>
                <input type="text" class="form-control" placeholder="Período Académico" name="periodo" autocomplete="off" value="<?php echo $info['nomPer'] ?>">
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