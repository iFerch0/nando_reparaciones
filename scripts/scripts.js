// Función para cargar datos de usuario
function cargarDatosUsuario() {
    var identificacion = document.getElementById('identificacion').value;
    var nameInput = document.getElementById('nombres');
    var lastNameInput = document.getElementById('apellidos');

    // Realizar una petición AJAX para obtener los datos de identificación
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../../scripts/get_user_data.php?identificacion=' + encodeURIComponent(identificacion), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Procesar y llenar los campos de nombre y apellidos con la respuesta recibida
            var userData = JSON.parse(xhr.responseText);
            nameInput.value = userData.name;
            lastNameInput.value = userData.lastName;
        }
    };
    xhr.send();
}

// Agregar evento de clic al botón para cargar datos después de que se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {
    var loadDataButton = document.getElementById('loadDataButton');
    if (loadDataButton) {
        loadDataButton.addEventListener('click', cargarDatosUsuario);
    }
});

// Función para buscar personas por identificación
function buscarPersonas() {
    var identificacion = document.getElementById('buscarIdentificacion').value;

    // Realiza una petición AJAX para buscar personas por identificación
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../scripts/buscar_personas.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Actualiza la tabla con los resultados de la búsqueda
            var tableBody = document.querySelector('table tbody');
            tableBody.innerHTML = xhr.responseText;
        }
    };
    xhr.send('identificacion=' + encodeURIComponent(identificacion));
}

// Agregar evento de clic al botón de búsqueda después de que se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {
    var btnBuscar = document.getElementById('btnBuscar');
    if (btnBuscar) {
        btnBuscar.addEventListener('click', buscarPersonas);
    }
});
