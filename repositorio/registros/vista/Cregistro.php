<?php

require_once('../../configuracion/modelo/configuracion.php');

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
        <h2><b>Nuevo Registro<b></h2>
        <form method="POST" action="../controlador/addRegistro.php">
            <div class="form-group">
                <label>Nombre del Registro</label>
                <input type="text" class="form-control" placeholder="Nombre del Registro" name="nombre" autocomplete="off" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" placeholder="Descripción" name="descripcion" autocomplete="off" required=""></textarea>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Link de Acceso</label>
                <input type="url" class="form-control" placeholder="Link de acceso" name="acceso" autocomplete="off" required="">
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Indicador Asociado</label>
                <select name="indicador" class="form-control">
                    <option>--Seleccione--</option>
                    <?php
                    $Indicadores = $ModeloConfiguracion->getIndicadores();
                    if ($Indicadores != null) {
                        foreach ($Indicadores as $ind) {
                    ?>
                            <option value="<?php echo $ind['idInd'] ?>"><?php echo $ind['numInd'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Fuente de Información</label>
                <select name="fuente" class="form-control">
                    <option>--Seleccione--</option>
                    <?php
                    $Fuentes = $ModeloConfiguracion->getFuentes();
                    if ($Fuentes != null) {
                        foreach ($Fuentes as $fue) {
                    ?>
                            <option value="<?php echo $fue['idFue'] ?>"><?php echo $fue['nomFue'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="clearfix"></div>

            <button type="submit" class="btn btn-info btn-lg btn-responsive">Crear</button>
        </form>
    </div>
</body>

</html>