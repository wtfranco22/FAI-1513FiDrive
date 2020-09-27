$('#eje1').bootstrapValidator({
    message: 'Este valor no es valido',

    feedbackIcons: {
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle',
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
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle'
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
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle'
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
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle'
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
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle'
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
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle',
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
        valid: 'fas fa-smile',
        invalid: 'fas fa-angry',
        validating: 'fa fa-circle'
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