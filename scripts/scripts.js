var BASE_URL = 'http://localhost/nando_reparaciones/';

function cargarDatosUsuario() {
    var id_cliente = document.getElementById('id_cliente').value;
    var nameInput = document.getElementById('nombres');
    var lastNameInput = document.getElementById('apellidos');
    var telefonoInput = document.getElementById('telefono'); // Añadir un elemento HTML para mostrar el teléfono


    var xhr = new XMLHttpRequest();
    xhr.open('GET', BASE_URL + '/scripts/get_user_data.php?id=' + encodeURIComponent(id_cliente), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var userData = JSON.parse(xhr.responseText);
            if (userData.error !== "NULL") {
                nameInput.value = userData.name;
                lastNameInput.value = userData.lastName;
                telefonoInput.value = userData.telefono; // Asignar el valor del teléfono al elemento HTML
            } else {
                var confirmation = confirm("No se encontró usuario con este ID. ¿Deseas registrar?");
    
    if (confirmation) {
        window.location.href = BASE_URL + '/views/Personas/agregarPersonaView.php';
    }
            }
        }
    };
    xhr.send();
}

document.addEventListener('DOMContentLoaded', function () {
    var loadDataButton = document.getElementById('loadDataButton');
    if (loadDataButton) {
        loadDataButton.addEventListener('click', cargarDatosUsuario);
    }
});

function buscarPersonas() {
    var identificacion = document.getElementById('buscarIdentificacion').value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../scripts/buscar_personas.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var tableBody = document.querySelector('table tbody');
            tableBody.innerHTML = xhr.responseText;
        }
    };
    xhr.send('identificacion=' + encodeURIComponent(identificacion));
}

document.addEventListener('DOMContentLoaded', function () {
    var btnBuscar = document.getElementById('btnBuscar');
    if (btnBuscar) {
        btnBuscar.addEventListener('click', buscarPersonas);
    }
});
