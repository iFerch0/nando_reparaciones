<?php
// ... (código anterior)

// Obtener la URL actual
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$segments = explode('/', trim($url, '/'));

// Definir rutas y controladores correspondientes
$routes = [
    'login' => 'views/loginView.php',
    'home' => 'views/home.php',
    'agregar-orden' => 'views/agregarOrdenView.php'
    // Agrega más rutas según tus necesidades
];

// Verificar si la ruta solicitada existe en las rutas definidas
$route = isset($segments[1]) ? $segments[1] : 'login';

if (array_key_exists($route, $routes)) {
    include $routes[$route];
} else {
    // Mostrar una página de error o redirigir a una página predeterminada si la ruta no se encuentra
    include 'views/errorView.php';
}

// ... (código posterior)
?>
