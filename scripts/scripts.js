var BASE_URL = 'https://e6df-191-108-141-15.ngrok-free.app/nando_reparaciones/';

function cargarDatosUsuario() {
    var id_cliente = document.getElementById('id_cliente').value;
    var nameInput = document.getElementById('nombres');
    var lastNameInput = document.getElementById('apellidos');
    var telefonoInput = document.getElementById('telefono');

    var xhr = new XMLHttpRequest();
    xhr.open('GET', BASE_URL + '/scripts/get_user_data.php?id=' + encodeURIComponent(id_cliente), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var userData = JSON.parse(xhr.responseText);
            if (userData.error !== "NULL") {
                nameInput.value = userData.name;
                lastNameInput.value = userData.lastName;
                telefonoInput.value = userData.telefono;
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

function verificarExistenciaPersona() {
    var id_cliente = document.getElementById('id_cliente').value;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', BASE_URL + '/scripts/get_user_data.php?id=' + encodeURIComponent(id_cliente), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var userData = JSON.parse(xhr.responseText);
            if (userData.error !== "NULL") {
                alert(userData.name + ' ' + userData.lastName);
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
    var loadDataButton = document.getElementById('verificarPersona');
    if (loadDataButton) {
        loadDataButton.addEventListener('click', verificarExistenciaPersona);
    }
});

function verificarEquipoSerial($serial) {
    var tipo_equipo = document.getElementById('tipo_equipo');
    var marca = document.getElementById('marca');
    var modelo = document.getElementById('modelo');
    var serial = document.getElementById('serial').value;
    

    var xhr = new XMLHttpRequest();
    xhr.open('GET', BASE_URL + '/scripts/get_equipo_serial.php?serial=' + encodeURIComponent(serial), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var equipoSerial = JSON.parse(xhr.responseText);
            if (equipoSerial.error!== "NULL") {
                tipo_equipo.value = equipoSerial.tipo_equipo;
                marca.value = equipoSerial.marca;
                modelo.value = equipoSerial.modelo;
                serial.value = equipoSerial.serial;
                //alert(equipoSerial.tipo_equipo + ' ' + equipoSerial.serial + ' ' + equipoSerial.marca +'' + equipoSerial.modelo);
            } else {
                var confirmation = confirm("No se encontró equipo con este serial. ¿Deseas registrar?");
                if (confirmation) {
                    window.location.href = BASE_URL + '/views/Equipos/agregarEquipoView.php';
                }
            }
        }
    };
    xhr.send();        
}

document.addEventListener('DOMContentLoaded', function () {
    var loadDataButton = document.getElementById('verificarSerial');
    if (loadDataButton) {
        loadDataButton.addEventListener('click', verificarEquipoSerial);
    }
});
