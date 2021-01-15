<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionCategoria = $ModeloConfiguracion->getByIdCategoria($Id);
$Temas = $ModeloConfiguracion->getTemas();

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="../../estilos/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../estilos/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="../../estilos/css/Cusuario.css">
    <link rel="stylesheet" type="text/css" href="../../estilos/fonts/fontawesome-free-5.15.1-web/css/all.min.css" media="all">
    <title>Repositorio de Autoevaluación - Universidad Nacional de Colombia</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2><b>Asociar Temas a una Categoría<b></h2>
        <form method="POST" action="../controlador/Acategoria.php">
            <input type="hidden" name="Id" value="<?php echo $Id ?>">

            <?php
            if ($InformacionCategoria != null) {
                foreach ($InformacionCategoria as $info) {
            ?>
                    <div class="form-group">
                        <label>Categoría</label>
                        <input type="text" class="form-control" placeholder="Categoría" name="categoria" autocomplete="off" value="<?php echo $info['nomCat'] ?>" disabled>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Temas</label>
                        <select name="tema" class="form-control">
                            <option>--Seleccione--</option>
                            <?php
                            $Temas = $ModeloConfiguracion->getAsociadosDisponiblesCategorias($Id);
                            if ($Temas != null) {
                                foreach ($Temas as $tem) {
                            ?>
                                        <option value="<?php echo $tem['idTem'] ?>"><?php echo $tem['nomTem'] ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info btn-lg btn-responsive">Asociar</button><br><br>

                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="text-align: center;">TEMA</th>
                                <th scope="col" style="text-align: center;">DESCRIPCION</th>
                                <th scope="col" style="text-align: center;">ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody><?php $Temas = $ModeloConfiguracion->getAsociadosACategorias($Id);
                                $cont = 1;
                                if ($Temas != null) {
                                    foreach ($Temas as $tem) { ?><tr>
                                        <td style="text-align: center;"><?php echo $tem["nomTem"] ?></td>
                                        <td style="text-align: justify"><?php echo $tem["desTem"] ?></td>
                                        <td><a style="text-decoration: none; color: rgb(166, 28, 49)" href="../controlador/DAcategoria.php?transaction=<?php echo $tem['idTem']?>&transporte=<?php echo $Id?>" ><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                                    </tr>
                            <?php
                                    }
                                } ?>
                        </tbody>
                    </table>

            <?php
                }
            }
            ?>

            <div class="clearfix"></div>
        </form>

        <a href="index.php" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
    </div>
</body>

</html>