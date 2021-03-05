jQuery(document).on('submit', '#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: './usuarios/controlador/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
    })
    .done(function(respuesta){
        if(!respuesta.error){
            location.href= './rol-editar/vista/index.php';
        }else{
            alert('Usuario y/o contraseña incorrectos');
        }
    })
});