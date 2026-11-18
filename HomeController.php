<?php
// HomeController.php: CONTROLADOR de la página de inicio.
// Le pide los datos al modelo y se los pasa a la vista.
require_once __DIR__ . '/../modelo/modelo.php';   // <-- aquí entra el MODELO

class HomeController {
    private $conexion;

    public function __construct() {
        global $conexion;            // viene de conexion.php
        $this->conexion = $conexion;
    }

    // GET index.php (y GET ?categoria=ID para filtrar los inmuebles)
    public function index() {
        $categoria   = $_GET['categoria'] ?? null;
        $categorias  = listarCategorias($this->conexion);
        $propiedades = listarPropiedades($this->conexion, $categoria);

        require __DIR__ . '/../vistas/inicio.php';   // <-- aquí entra la VISTA
    }
}
