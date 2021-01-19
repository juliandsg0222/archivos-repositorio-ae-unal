<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionPrograma = $ModeloConfiguracion->getByIdPrograma($Id);

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
        <h2><b>Actualizar Programa Académico<b></h2>
        <form method="POST" action="../controlador/editPrograma.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">

        <?php
            if($InformacionPrograma != null){
                foreach ($InformacionPrograma as $info) {
        ?>
            <div class="form-group">
                <label>Programa</label>
                <input type="text" class="form-control" placeholder="Programa Académico" name="programa" autocomplete="off" value="<?php echo $info['nomProg'] ?>" required>
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