<?php
// SolicitudController.php: CONTROLADOR del formulario (CRUD de solicitudes).
// Recibe la petición GET o POST, llama al modelo y carga la vista.
require_once __DIR__ . '/../modelo/modelo.php';   // <-- aquí entra el MODELO

class SolicitudController {
    private $conexion;

    public function __construct() {
        global $conexion;            // viene de conexion.php
        $this->conexion = $conexion;
    }

    // GET ?pagina=solicitudes (y ?editar=ID para cargar una en el formulario)
    public function index() {
        $categorias  = listarCategorias($this->conexion);
        $solicitudes = listarSolicitudes($this->conexion);
        $editando    = isset($_GET['editar']) ? buscarSolicitud($this->conexion, $_GET['editar']) : null;

        require __DIR__ . '/../vistas/solicitudes.php';   // <-- aquí entra la VISTA
    }

    // POST: crear o actualizar y redirigir a la página de gracias
    public function guardar() {
        if ($_POST['accion'] === 'actualizar') {
            actualizarSolicitud($this->conexion, $_POST);
            $tipo = 'actualizado';
        } else {
            crearSolicitud($this->conexion, $_POST);
            $tipo = 'creado';
        }

        header('Location: index.php?pagina=gracias&tipo=' . $tipo);
        exit;
    }

    // POST: eliminar y volver a la lista
    public function eliminar() {
        eliminarSolicitud($this->conexion, $_POST['id']);
        header('Location: index.php?pagina=solicitudes');
        exit;
    }

    // GET ?pagina=gracias
    public function gracias() {
        $tipo = $_GET['tipo'] ?? 'creado';
        require __DIR__ . '/../vistas/gracias.php';   // <-- aquí entra la VISTA
    }
}
