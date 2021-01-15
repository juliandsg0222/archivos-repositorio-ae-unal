<?php
require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de tabla</title>
</head>
<body>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">CATEGORÍA</th>
            <th scope="col">TEMA</th>
            <th scope="col">INDICADOR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $Relaciones = $ModeloConfiguracion->getRelaciones();
        $cont = 1;
        if ($Relaciones != null) {
            foreach ($Relaciones as $rela) { ?><tr>
                    <th scope="row"><?php echo $rela['nomCat'] ?></th>
                    <td><?php echo $rela['nomTem'] ?></td>
                    <td><?php echo $rela['numInd'] ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>    
</body>
</html>