function validarHora() {
    var res = true;
    var horarios = document.getElementById("form2");
    for (var i = 0; i < 5; i++) {
        if (horarios[i].value != "" && horarios[i + 5].value != "") {
            if (horarios[i].value >= horarios[i + 5].value) {
                horarios[i + 5].style.borderColor = "red";
                horarios[i].style.borderColor = "red";
                res = false;
            } else {
                horarios[i + 5].style.borderColor = "black";
                horarios[i].style.borderColor = "black";
            }
        } else if (horarios[i].value != "") {
            horarios[i + 5].style.borderColor = "red";
            res = false;
        } else if (horarios[i + 5].value != "") {
            horarios[i].style.borderColor = "red";
            res = false;
        } else if (horarios[i + 5].style.borderColor == "red" || horarios[i].style.borderColor == "red") {
            horarios[i + 5].style.borderColor = "black";
            horarios[i].style.borderColor = "black";
        }
    }
    return res;
}