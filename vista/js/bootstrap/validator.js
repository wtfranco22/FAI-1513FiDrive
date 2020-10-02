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

$('#tp1eje1').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down',
    },

    fields: {
        numero: {
            validators: {
                notEmpty: {
                    message: "Ingrese números"
                },
                numeric: {
                    message: "Solo números"
                },
            },
        }
    }
}
);
$('#tp1eje3').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },

    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: "No debe ingresar números o simbolos"
                },
            }
        },
        apellido: {
            validators: {
                notEmpty: {
                    message: 'El apellido es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: 'No debe ingresar números o simbolo'
                },
            }
        },
        edad: {
            validators: {
                notEmpty: {
                    message: 'La edad es requerida'
                },
                numeric: {
                    message: 'Solo números'
                },
                between: {
                    min: 1,
                    max: 120,
                    message: "Una edad valida, por favor"
                }
            }
        },
        direccion: {
            validators: {
                notEmpty: {
                    message: 'Necesitamos la dirección'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z\s,]+$/
                },
                stringLength: {
                    max: 100
                },
            }
        },
    }
}
);
$('#tp1eje4').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },

    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: "No debe ingresar números o simbolos"
                },
            }
        },
        apellido: {
            validators: {
                notEmpty: {
                    message: 'El apellido es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: 'No debe ingresar números o simbolo'
                },
            }
        },
        edad: {
            validators: {
                notEmpty: {
                    message: 'La edad es requerida'
                },
                numeric: {
                    message: 'Solo números'
                },
                between: {
                    min: 1,
                    max: 120,
                    message: "Una edad valida, por favor"
                }
            }
        },
        direccion: {
            validators: {
                notEmpty: {
                    message: 'Necesitamos la dirección'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z\s,]+$/
                },
                stringLength: {
                    max: 100
                },
            }
        },
    }
}
);
$('#tp1eje5').bootstrapValidator({
    message: "Ingrese un valor valido",

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },

    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: "No debe ingresar números o simbolos"
                },
            }
        },
        apellido: {
            validators: {
                notEmpty: {
                    message: 'El apellido es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: 'No debe ingresar números o simbolo'
                },
            }
        },
        edad: {
            validators: {
                notEmpty: {
                    message: 'La edad es requerida'
                },
                numeric: {
                    message: 'Solo números'
                },
                between: {
                    min: 1,
                    max: 120,
                    message: "Una edad valida, por favor"
                }
            }
        },
        direccion: {
            validators: {
                notEmpty: {
                    message: 'Necesitamos la dirección'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z\s]+$/
                },
                stringLength: {
                    max: 100
                },
            }
        },
        sexo: {
            validators: {
                notEmpty: {
                    message: 'Debe indicar su sexo'
                }
            }
        },
    }
});
$('#tp1eje6').bootstrapValidator({
    message: "Ingrese un valor valido",

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: "No debe ingresar números o simbolos"
                },
            }
        },
        apellido: {
            validators: {
                notEmpty: {
                    message: 'El apellido es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: 'No debe ingresar números o simbolo'
                },
            }
        },
        edad: {
            validators: {
                notEmpty: {
                    message: 'La edad es requerida'
                },
                numeric: {
                    message: 'Solo números'
                },
                between: {
                    min: 1,
                    max: 120,
                    message: "Una edad valida, por favor"
                }
            }
        },
        direccion: {
            validators: {
                notEmpty: {
                    message: 'Necesitamos la dirección'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z\s,]+$/,
                    message: 'Nada de caracteres raros!'
                },
                stringLength: {
                    max: 100
                },
            }
        },
        sexo: {
            validators: {
                notEmpty: {
                    message: 'Debe indicar su sexo'
                }
            }
        },
        estudio: {
            validators: {
                notEmpty: {
                    message: 'Debe indicar su estudio'
                }
            }
        },
    }
});
$('#tp1eje7').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down',
    },

    fields: {
        nro1: {
            validators: {
                notEmpty: {
                    message: "Ingrese números"
                },
                numeric: {
                    message: 'Solamente numeros'
                }
            }
        },
        nro2: {
            validators: {
                notEmpty: {
                    message: "Ingrese números"
                },
                numeric: {
                    message: 'Solamente numeros'
                }
            }
        },
    },
});
$('#tp1eje8').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido'
                },
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: 'No debe ingresar números o simbolo'
                },

            }
        },
        apellido: {
            validators: {
                regexp: {
                    regexp: /^[a-zA-ZáéíóúÁÉÍÓÚ]+$/,
                    message: 'No debe ingresar números o simbolo'
                },
            }
        },
        edad: {
            validators: {
                notEmpty: {
                    message: 'La edad es requerida'
                },
                numeric: {
                    message: 'Solo números'
                },
                between: {
                    min: 1,
                    max: 120,
                    message: "Una edad valida, por favor"
                }
            }
        },
        estudiante: {
            validators: {
                notEmpty: {
                    message: 'Debe ingresar su estado estudiantil'
                }
            }
        }
    }
});
$('#tp2eje1').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },

    fields: {
        usuario: {
            validators: {
                notEmpty: {
                    message: 'Debe ingresar el usuario',
                },
                regexp: {
                    regexp: /^[a-zA-Z0-9]+$/,
                    message: 'No Debe ingresar caracteres especiales',
                },
            }
        },
        clave: {
            validators: {
                notEmpty: {
                    message: 'Debe completar la contraseña'
                },
                regexp: {
                    regexp: /\s?(?=[a-zA-Z]*[0-9]+)(?=[0-9]*[a-zA-Z]+)/,
                    message: 'al menos una letra y un número'
                },
                stringLength: {
                    min: 8,
                    message: 'Al menos 8 caracteres',
                },
            }
        }
    }
});
$('#tp2eje2').bootstrapValidator({

    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        titulo: {
            validators: {
                notEmpty: {
                    message: 'Debe ingresar el titulo',
                },
                regexp: {
                    regexp: /^[0-9a-zA-ZáéíóúÁÉÍÓÚ\s,]+$/,
                    message: 'Sin sombolos extraños',
                },
            },
        },
        actores: {
            validators: {
                notEmpty: {
                    message: 'Al menos un actor debe ingresar',
                },
                regexp: {
                    regexp: /^[0-9a-zA-ZáéíóúÁÉÍÓÚ\s,]+$/,
                    message: 'Sin simbolos extraños',
                },
            },
        },
        dire: {
            validators: {
                notEmpty: {
                    message: 'Ingrese nombre del director',
                },
                regexp: {
                    regexp: /^[0-9a-zA-ZáéíóúÁÉÍÓÚ\s,]+$/,
                    message: 'Solo letras por favor',
                },
            }
        },
        guion: {
            validators: {
                notEmpty: {
                    message: 'Ingrese el gión',
                },
            },
        },
        produccion: {
            validators: {
                notEmpty: {
                    message: 'Ingrese la producción',
                },
            }
        },
        anio: {
            validators: {
                notEmpty: {
                    message: 'Ingrese el año por favor!',
                },
                numeric: {
                    message: 'Solamente números!',
                },
                stringLength: {
                    min: 1,
                    max: 4,
                    message: 'Ingrese un año valido',
                },
            }
        },
        nacionalidad: {
            validators: {
                notEmpty: {
                    message: 'Ingrese la nacionalidad',
                },
                regexp: {
                    regexp: /[a-zA-ZáéíóúÁÉÍÓÚ\s]+/,
                }
            }
        },
        genero: {
            validators: {
                notEmpty: {
                    message: 'Género, por favor!',
                },
            }
        },
        duracion: {
            validators: {
                notEmpty: {
                    message: 'Los minutos de la pelicula',
                },
                numeric: {
                    message: 'Solo números por favor',
                },
                stringLength: {
                    min: 1,
                    max: 3,
                    message: '3 dígitos',
                },
            },
        },
        espectador: {
            validators: {
                notEmpty: {
                    message: "Seleccione la edad acorde",
                },
            }
        },
        sinopsis: {
            validators: {
                notEmpty: {
                    message: 'Ingrese la sinopsis',
                }
            }
        }
    }
});
$('#armarchivo').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'Debe contener un nombre el archivo'
                },
                regexp: {
                    regexp: /^\w+$/,
                    message: 'Sin caracteres especiales',
                },
            },
        },
        descripcion: {
            validators: {
                notEmpty: {
                    message: 'Debe tener una descripción',
                },
            },
        },
        usuario: {
            validators: {
                notEmpty: {
                    message: 'Debe elegir el usuario',
                },
            },
        },
        tipo: {
            validators: {
                notEmpty: {
                    message: 'Debe elegir el tipo de archivo',
                },
            },
        },
        clave: {
            validators: {
                notEmpty: {
                    message: 'Debe contener una clave',
                },
                stringLength: {
                    min: 8,
                    message: 'Al menos 8 caracteres',
                },
            },
        },
    }
});
$('#compartirarchivo').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'Debe contener un nombre el archivo'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z-_.]+$/,
                    message: 'Sin caracteres especiales',
                },
            },
        },
        usuario: {
            validators: {
                notEmpty: {
                    message: 'Debe elegir el usuario',
                },
            },
        },
        clave: {
            validators: {
                notEmpty: {
                    message: 'Debe contener una clave',
                },
                stringLength: {
                    min: 8,
                    message: 'Al menos 8 caracteres',
                },
            },
        },
    }
});
$('#eliminararchivocompartido').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'Debe contener un nombre el archivo'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z-_.]+$/,
                    message: 'Sin caracteres especiales',
                },
            },
        },
        cantveces: {
            validators: {
                notEmpty: {
                    message: 'Debe mostrar cantidad de veces compartido',
                },
            },
        },
        motivo: {
            validators: {
                notEmpty: {
                    message: 'Debe escribir el motivo',
                },
            },
        },
        usuario: {
            validators: {
                notEmpty: {
                    message: 'Debe seleccionar el usuario',
                },
            },
        },
    },
});
$('#eliminararchivo').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'Debe contener un nombre el archivo'
                },
                regexp: {
                    regexp: /^[0-9a-zA-Z-_.]+$/,
                    message: 'Sin caracteres especiales',
                },
            },
        },
        motivo: {
            validators: {
                notEmpty: {
                    message: 'Debe escribir el motivo',
                },
            },
        },
        usuario: {
            validators: {
                notEmpty: {
                    message: 'Debe seleccionar el usuario',
                },
            },
        },
    },
});
$('#tp3eje1').bootstrapValidator({
    message: 'El valor ingresa es incorrecto',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields:{
        archivo:{
            validators:{
                notEmpty: {
                    message: 'Seleccione un archivo por favor'
                },
                file: {
                    type: 'application/msword,application/pdf',
                    extension: 'doc,pdf',
                    maxSize: 2097152 ,
                    message: 'Seleccione .PDF o .DOC o elemento mas pequeño'
                },
            },
        },
    },
});
$('#tp3eje2').bootstrapValidator({
    message: 'El valor ingresa es incorrecto',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields:{
        archivo:{
            validators:{
                notEmpty: {
                    message: 'Seleccione un archivo por favor'
                },
                file: {
                    type: 'text/plain',
                    extension: 'txt',
                    maxSize: 2097152 ,
                    message: 'Seleccione un archivo .txt'
                },
            },
        },
    },
});
$('#tp3eje3').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-thumbs-up',
        invalid: 'fa fa-thumbs-down',
        validating: 'fa fa-thumbs-down'
    },
    fields: {
        titulo: {
            validators: {
                notEmpty: {
                    message: 'Debe ingresar el titulo',
                },
                regexp: {
                    regexp: /^[0-9a-zA-ZáéíóúÁÉÍÓÚ\s,]+$/,
                    message: 'Sin sombolos extraños',
                },
            },
        },
        actores: {
            validators: {
                notEmpty: {
                    message: 'Al menos un actor debe ingresar',
                },
                regexp: {
                    regexp: /^[0-9a-zA-ZáéíóúÁÉÍÓÚ\s,]+$/,
                    message: 'Sin simbolos extraños',
                },
            },
        },
        dire: {
            validators: {
                notEmpty: {
                    message: 'Ingrese nombre del director',
                },
                regexp: {
                    regexp: /^[0-9a-zA-ZáéíóúÁÉÍÓÚ\s,]+$/,
                    message: 'Solo letras por favor',
                },
            }
        },
        guion: {
            validators: {
                notEmpty: {
                    message: 'Ingrese el gión',
                },
            },
        },
        produccion: {
            validators: {
                notEmpty: {
                    message: 'Ingrese la producción',
                },
            }
        },
        anio: {
            validators: {
                notEmpty: {
                    message: 'Ingrese el año por favor!',
                },
                numeric: {
                    message: 'Solamente números!',
                },
                stringLength: {
                    min: 1,
                    max: 4,
                    message: 'Ingrese un año valido',
                },
            }
        },
        nacionalidad: {
            validators: {
                notEmpty: {
                    message: 'Ingrese la nacionalidad',
                },
                regexp: {
                    regexp: /[a-zA-ZáéíóúÁÉÍÓÚ\s]+/,
                }
            }
        },
        genero: {
            validators: {
                notEmpty: {
                    message: 'Género, por favor!',
                },
            }
        },
        duracion: {
            validators: {
                notEmpty: {
                    message: 'Los minutos de la pelicula',
                },
                numeric: {
                    message: 'Solo números por favor',
                },
                stringLength: {
                    min: 1,
                    max: 3,
                    message: '3 dígitos',
                },
            },
        },
        espectador: {
            validators: {
                notEmpty: {
                    message: "Seleccione la edad acorde",
                },
            }
        },
        sinopsis: {
            validators: {
                notEmpty: {
                    message: 'Ingrese la sinopsis',
                }
            }
        },
        archivo: {
            validators:{
                notEmpty: {
                    message: 'Seleccione un archivo por favor'
                },
                file: {
                    type: 'image/gif,image/jpeg,image/png',
                    extension: 'gif,jpg,png',
                    maxSize: 10485760 ,
                    message: 'Seleccione una imagen'
                },
            },            
        }
    }
})
/*regexp: {
    regexp: '(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,}$',
    message: 'Debe tener al menos un numero, letra mayuscula y minuscula'
}*/
