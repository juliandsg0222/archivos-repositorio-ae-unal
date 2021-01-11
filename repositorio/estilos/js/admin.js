// function llamarUsuarios(){
//     EspacioConsulta.innerHTML = '<h1 id="titAdmin"><b>Usuarios</b></h1><div id="tablas" style="height: 100%;"></div>';
//     tablas.innerHTML ='<table class="table table-hover"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">USUARIO</th><th scope="col">NOMBRE</th><th scope="col">ROL</th><th scope="col">ACCIÓN</th></tr></thead><?php $Usuarios = $ModeloConfiguracion->getUsuarios(); $cont = 1; if($Usuarios != null){ foreach ($Usuarios as $usu) { ?><tbody><tr><th scope="row"><?php echo $cont++ ?></th><td><?php echo $usu["idUsu"] ?></td><td><?php echo $usu["nomUsu"] ?></td><td><?php echo $usu["nomRol"] ?></td></tr><?php }} ?></tbody></table></body>';
// }

$(document).ready(() => {
    $('.BarraLateral').click(function() {
        $('#EspacioConsulta').css('background-image', 'url(null)');
    })
})