<?php

require_once('../../configuracion/modelo/configuracion.php');
require_once('../modelo/registros.php');

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
    <link rel="stylesheet" type="text/css" href="../../estilos/fonts/fontawesome-free-5.15.1-web/css/all.min.css" media="all">
    <title>Repositorio de Autoevaluación - Universidad Nacional de Colombia</title>
</head>

<body>
    <div class="container" id="advanced-search-form-2">
        <h2><b>Visualización de Registro<b></h2>
        <form method="POST" action="../controlador/APerregistro.php">
            <input type="hidden" name="IdReg" value="<?php echo $IdReg ?>">
            <input type="hidden" name="IdTemas" value="<?php echo $IdTemas ?>">

            <?php
            if ($InformacionRegistros != null) {
                foreach ($InformacionRegistros as $info) {
            ?>


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
                        <label>Períodos Académicos</label>
                        <select name="periodos" required="" class="form-control">
                            <option disabled selected="selected">--Seleccione--</option>
                            <?php
                            $PeriodosR = $ModeloRegistros->getPeriodosDisponibles($IdReg);
                            if ($PeriodosR != null) {
                                foreach ($PeriodosR as $per) {
                            ?>
                                    <option value="<?php echo $per['idPer'] ?>"><?php echo $per['nomPer'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-lg btn-success">Asociar</button>
        </form>


        <a href="index.php?transaction=<?php echo $IdTemas ?>" style="text-decoration: none;"><button type="submit" class="btn btn-info btn-lg btn-responsive" style="color: white">Volver</button></a>
        <br><br>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align: center;">PERÍODO</th>
                    <th scope="col" style="text-align: center;">ACCIÓN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $Periodos = $ModeloRegistros->getPeriodos($info['idReg']);
                    if ($Periodos != null) {
                        foreach ($Periodos as $periodos) { ?><tr>
                            <td style="text-align: center;"><?php echo $periodos["nomPer"] ?></td>
                            <td style="text-align: center;"><a style="text-decoration: none; color: rgb(166, 28, 49)" href="../controlador/DAPerregistro.php?periodo=<?php echo $periodos['idPer'] ?>&registro=<?php echo $IdReg ?>&tema=<?php echo $IdTemas?>"><i class="fas fa-trash-alt" title="Desasociar"></i></a></td>
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