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
// Asociar evento de clic al botón para cargar datos
document.getElementById('loadDataButton').addEventListener('click', cargarDatosUsuario);