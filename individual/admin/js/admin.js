function llamarUsuarios(){
    EspacioConsulta.innerHTML = '<h1 id= "titAdmin"><b>Usuarios</b></h1><div id="tablas" style="height: 90%;"></div><div id="botones" style="height: 90%;"></div>';
    tablas.innerHTML ='<table class="table table-hover"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">USUARIO</th><th scope="col">NOMBRE</th><th scope="col">ROL</th></tr></thead><tbody><tr><th scope="row">1</th><td>Mark</td><td>Otto</td><td>@mdo</td></tr><tr><th scope="row">2</th><td>Jacob</td><td>Thornton</td><td>@fat</td></tr><tr><th scope="row">3</th><td>Larry</td><td>the Bird</td><td>@twitter</td></tr></tbody></table><table class="table">';
    botones.innerHTML ='<table class="table"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">First</th><th scope="col">Last</th><th scope="col">Handle</th></tr></thead><tbody><tr><th scope="row">1</th><td>Mark</td><td>Otto</td><td>@mdo</td></tr><tr><th scope="row">2</th><td>Jacob</td><td>Thornton</td><td>@fat</td></tr><tr><th scope="row">3</th><td>Larry</td><td>the Bird</td><td>@twitter</td></tr></tbody></table><table class="table">';
}

$(document).ready(() => {
    $('.BarraLateral').click(function() {
        $('#EspacioConsulta').css('background-image', 'url(null)');
    })
})