function comprobarPass(pass1, pass2) {
    if (pass1 !== pass2) {
        alert("Las contraseñas no coinciden");
        document.getElementById("pass2").value = "none";
    }
}
function carga() {
    document.getElementById("sectionRegistro").style.display = "none";
    document.getElementById("sectionAcceso").style.display = "none";
}

function mostrarRegistro() {
    document.getElementById("sectionRegistro").style.display = "block";
    document.getElementById("sectionAcceso").style.display = "none";
}
function mostrarAcceso() {
    document.getElementById("sectionRegistro").style.display = "none";
    document.getElementById("sectionAcceso").style.display = "block";
}

document.getElementById("btnNavInicio").addEventListener('click', carga, false);
document.getElementById("btnNavAcceso").addEventListener('click', mostrarAcceso, false);
document.getElementById("btnNavRegistro").addEventListener("click", mostrarRegistro, false);
document.getElementById("btnAsideAcceder").addEventListener("click", mostrarAcceso, false);

var pass1 = document.getElementById("pass1").value;
var pass2 = document.getElementById("pass2").value;
document.getElementById("enviarUsu").addEventListener("click", comprobarPass(pass1, pass2), false);