<?php
// index.php: punto de entrada. Revisa qué se pidió (GET o POST)
// y llama al CONTROLADOR que corresponde.
require_once 'controllers/HomeController.php';
require_once 'controllers/SolicitudController.php';

$homeController      = new HomeController();
$solicitudController = new SolicitudController();

// Peticiones POST: vienen del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['accion'] === 'eliminar') {
        $solicitudController->eliminar();
    } else {
        $solicitudController->guardar();   // crear o actualizar
    }
}

// Peticiones GET
$pagina = $_GET['pagina'] ?? 'inicio';

switch ($pagina) {
    case 'gracias':
        $solicitudController->gracias();
        break;
    case 'solicitudes':
        $solicitudController->index();
        break;
    default:
        $homeController->index();
        break;
}
