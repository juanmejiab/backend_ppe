let interactivo;
let logged = false;

window.onload = function () {
    personajes = document.getElementById("interactivo");
    personajes.addEventListener("click", evaluarLogin);
    cambiarSesion(JSON.parse(localStorage.getItem("logeado")));
}

function evaluarLogin(evento) {
    window.alert("Debes loguearte para acceder a esta sección.");
    location.href = "/login"
}

function cambiarSesion(bandera) {
    logged = bandera;
    localStorage.setItem("logeado", logged);

}