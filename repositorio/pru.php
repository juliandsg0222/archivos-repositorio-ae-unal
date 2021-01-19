<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">TEMA</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">ACCIÓN</th>
        </tr>
    </thead>
    <tbody><?php $Temas = $ModeloConfiguracion->getTemas();
            $cont = 1;
            if ($Temas != null) {
                foreach ($Temas as $tem) { ?><tr>
                    <th scope="row"><?php echo $cont++ ?></th>
                    <td><?php echo $tem["nomTem"] ?></td>
                    <td><?php echo $tem["desTem"] ?></td>
                    <td><a style="text-decoration: none; color: rgb(70, 107, 63)" href="Atema.php?transaction=<?php echo $tem['idTem'] ?>"><i class="fas fa-link" title="Asociar Indicadores"></i></a> <a style="text-decoration: none; color: rgb(244, 183, 61)" href="Utema.php?transaction=<?php echo $tem['idTem'] ?>"><i class="fas fa-edit" title="Editar"></i></a> <a style="text-decoration: none; color: rgb(166, 28, 49)" href="Dtema.php?transaction=<?php echo $tem['idTem'] ?>"><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                </tr><?php }
                } ?></tbody>
</table>