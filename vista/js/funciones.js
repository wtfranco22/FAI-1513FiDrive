function mostrarClave() {
    var cambio = document.getElementById("clave");
    if (cambio.type == "password") {
        cambio.type = "text";
        $('#ojo').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    } else {
        cambio.type = "password";
        $('#ojo').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
}


/*regexp: {
    regexp: '(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,}$',
    message: 'Debe tener al menos un numero, letra mayuscula y minuscula'
}*/