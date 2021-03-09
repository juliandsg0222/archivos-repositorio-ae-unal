<?php

require_once('../../configuracion/modelo/configuracion.php');
require_once('../modelo/registros.php');
require_once('../../usuarios/modelo/usuarios.php');

$ModeloUsuario = new Usuarios();
$ModeloUsuario->validateSession();

$ModeloConfiguracion = new Configuracion();
$ModeloRegistros = new Registros();

$IdReg = $_GET['transaction'];
$IdTemas = $_GET['tema'];
$InformacionRegistros = $ModeloRegistros->getByIdRegistro($IdReg);

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
    <div class="container" id="advanced-search-form-2">
        <h2><b>Visualización de Registro<b></h2>
        <form>
            <input type="hidden" name="Id" value="<?php echo $IdReg ?>">
            <input type="hidden" name="IdTemas" value="<?php echo $IdTemas ?>">

            <?php
            if ($InformacionRegistros != null) {
                foreach ($InformacionRegistros as $info) {
            ?>

                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="date" class="form-control" name="fecha" autocomplete="off" value="<?php echo $info['fechaReg'] ?>" required="" disabled="">
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Nombre del Registro</label>
                        <input type="text" class="form-control" placeholder="Nombre del Registro" name="nombre" autocomplete="off" value="<?php echo $info['nomReg'] ?>" required="" disabled="">
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" placeholder="Descripción" name="descripcion" autocomplete="off" required="" disabled=""><?php echo $info['desReg'] ?></textarea>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Link de Acceso</label>
                        <a href="<?php echo $info['linkReg'] ?>" target="_blank"><input type="url" class="form-control" placeholder="Link de acceso" name="acceso" autocomplete="off" required="" value="<?php echo $info['linkReg'] ?>" disabled="" style="cursor: pointer"></a>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Indicador Asociado</label>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="text-align: center;">INDICADOR</th>
                                    <th scope="col" style="text-align: center;">DESCRIPCIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Indicadores = $ModeloRegistros->getIndicadoresDeRegistro($IdTemas);
                                if ($Indicadores != null) {
                                    foreach ($Indicadores as $indi) { ?><tr>
                                            <td style="text-align: center;"><?php echo $indi["numInd"] ?></td>
                                            <td style="text-align: justify"><?php echo $indi["nomInd"] ?></td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Fuente de Información</label>
                        <select name="fuente" class="form-control" required="" disabled="">
                            <option disabled>--Seleccione--</option>
                            <?php
                            $Fuentes = $ModeloConfiguracion->getFuentes();
                            if ($Fuentes != null) {
                                foreach ($Fuentes as $fue) {
                                    $idFue = $fue['idFue'];
                                    $nomFue = $fue['nomFue'];
                                    if ($idFue == $info['idFue']) {
                            ?>
                                        <option value="<?php echo $idFue ?>" selected="selected"><?php echo $nomFue ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $idFue ?>"><?php echo $nomFue ?></option>
                    <?php
                                    }
                                }
                            }
                        }
                    }
                    ?>

                        </select>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Período académico asociado</label>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="text-align: center;">PERÍODO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Periodos = $ModeloRegistros->getPeriodos($info['idReg']);
                                if ($Periodos != null) {
                                    foreach ($Periodos as $peri) { ?><tr>
                                            <td style="text-align: center;"><?php echo $peri["nomPer"] ?></td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Programa académico asociado</label>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="text-align: center;">PROGRAMA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Programas = $ModeloRegistros->getProgramas($info['idReg']);
                                if ($Programas != null) {
                                    foreach ($Programas as $prog) { ?><tr>
                                            <td style="text-align: center;"><?php echo $prog["nomProg"] ?></td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix"></div>

        </form>

        <a href="index.php?transaction=<?php echo $IdTemas ?>" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
    </div>
</body>

</html>