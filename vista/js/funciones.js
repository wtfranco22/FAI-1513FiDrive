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

$('#archivo').change(function () {
    
});

function fortaleza() {
    var contra = document.getElementById('clave');
    if (contra.value.length < 6 || /^[a-zA-Z\s]+$/.test(contra.value) || /^[\d\s]+$/.test(contra.value)) {
        contra.style.border = '5px solid red';
        document.getElementById('aviso').innerText = 'Debil';
    } else if (/^[\w\d]+$/.test(contra.value)) {
        contra.style.border = '5px solid yellow';
        document.getElementById('aviso').innerText = 'Normal';
    } else {
        contra.style.border = '5px solid green';
        document.getElementById('aviso').innerText = 'Fuerte';
    }
}

function generarHash() {
    var generado = window.location.pathname;
    var link = document.getElementById('enlace');
    var cantDias = document.getElementById('dias');
    var cantDescargas = document.getElementById('descargas');
    if (cantDias.value == '' || cantDescargas.value == '') {
        link.value = generado + "/9007199254740991";
    } else {
        link.value = generado + "/" + cantDias.value + cantDescargas.value;
    }
}

function ubicacion() {
    alert('aca');
    var generado = window.location.pathname;
    var ubicacion = document.getElementById('ubicacion');
    ubicacion.value = generado;
    alert(ubicacion.value);
}