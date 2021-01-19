<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();
$Id = $_GET['transaction'];
$InformacionTemas = $ModeloConfiguracion->getByIdTema($Id);

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
        <h2><b>Asociar Indicadores a un Tema<b></h2>
        <form method="POST" action="../controlador/Atema.php">
            <input type="hidden" name="Id" value="<?php echo $Id ?>">

            <?php
            if ($InformacionTemas != null) {
                foreach ($InformacionTemas as $info) {
            ?>
                    <div class="form-group">
                        <label>Tema</label>
                        <input type="text" class="form-control" placeholder="Tema" name="tema" autocomplete="off" value="<?php echo $info['nomTem'] ?>" disabled required="">
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Indicadores</label>
                        <select name="indicador" required="" class="form-control">
                            <option disabled selected="selected">--Seleccione--</option>
                            <?php
                            $Indicadores = $ModeloConfiguracion->getAsociadosDisponiblesTemas($Id);
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

                    <button type="submit" class="btn btn-lg btn-success">Asociar</button>

        </form>


        <div class="clearfix"></div>

        <a href="index.php" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
        <br><br>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align: center;">INDICADOR</th>
                    <th scope="col" style="text-align: center;">DESCRIPCION</th>
                    <th scope="col" style="text-align: center;">ACCIÓN</th>
                </tr>
            </thead>
            <tbody><?php $Indicador = $ModeloConfiguracion->getAsociadosATemas($Id);
                    if ($Indicador != null) {
                        foreach ($Indicador as $ind) { ?><tr>
                            <td style="text-align: center;"><?php echo $ind["numInd"] ?></td>
                            <td style="text-align: justify"><?php echo $ind["nomInd"] ?></td>
                            <td><a style="text-decoration: none; color: rgb(166, 28, 49)" href="../controlador/DAtema.php?transaction=<?php echo $ind['idInd'] ?>&transporte=<?php echo $Id ?>"><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                <?php
                        }
                    } 
                ?>
            </tbody>
        </table>

        <?php
                }
            }
        ?>
    </div>
</body>

</html>