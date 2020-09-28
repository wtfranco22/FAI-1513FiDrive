$('#eje1').bootstrapValidator({
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
$('#eje3').bootstrapValidator({
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
                    regexp: /^[0-9a-zA-Z\s]+$/
                },
                stringLength: {
                    max: 100
                },
            }
        },
    }
}
);
$('#eje4').bootstrapValidator({
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
                    regexp: /^[0-9a-zA-Z\s]+$/
                },
                stringLength: {
                    max: 100
                },
            }
        },
    }
}
);

$('#eje5').bootstrapValidator({
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
$('#eje6').bootstrapValidator({
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
                    regexp: /^[0-9a-zA-Z\s]+$/,
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
$('#eje7').bootstrapValidator({
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
$('#eje8').bootstrapValidator({
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
$('#eje11').bootstrapValidator({
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
                    regexp: /^[a-zA-Z0-9\s]+$/,
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
$('#eje12').bootstrapValidator({
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
                    regexp: /[0-9a-zA-Z\s]*/,
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
                    regexp: /[a-zA-Z\s,]*/,
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
                    regexp: /[a-zA-Z\s]*/,
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
                    regexp: /[a-zA-ZáéíóúÁÉÍÓÚ\s]*/,
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
                    message: 'Minutos de 3 dígitos',
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

/*regexp: {
    regexp: '(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,}$',
    message: 'Debe tener al menos un numero, letra mayuscula y minuscula'
}*/
