<?php
// modelo.php: MODELO. Solo habla con la base de datos, no muestra nada.
require __DIR__ . '/../conexion.php';

// ---------- CATEGORÍAS ----------
// Trae cada categoría con cuántas propiedades tiene
function listarCategorias($conexion) {
    $sql = 'SELECT c.*, COUNT(p.id) AS total
            FROM categorias c
            LEFT JOIN propiedades p ON p.categoria_id = c.id
            GROUP BY c.id
            ORDER BY c.id';
    return $conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// ---------- PROPIEDADES ----------
// Si llega una categoría por GET se filtran
function listarPropiedades($conexion, $categoria = null) {
    $sql = 'SELECT p.*, c.nombre AS categoria
            FROM propiedades p
            JOIN categorias c ON c.id = p.categoria_id';
    $datos = [];

    if ($categoria) {
        $sql .= ' WHERE p.categoria_id = ?';
        $datos[] = $categoria;
    }
    $sql .= ' ORDER BY p.id DESC';

    $consulta = $conexion->prepare($sql);
    $consulta->execute($datos);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

// ---------- SOLICITUDES (CRUD del formulario) ----------
function listarSolicitudes($conexion) {
    $sql = 'SELECT s.*, c.nombre AS categoria
            FROM solicitudes s
            JOIN categorias c ON c.id = s.categoria_id
            ORDER BY s.id DESC';
    return $conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function buscarSolicitud($conexion, $id) {
    $consulta = $conexion->prepare('SELECT * FROM solicitudes WHERE id = ?');
    $consulta->execute([$id]);
    return $consulta->fetch(PDO::FETCH_ASSOC);
}

function crearSolicitud($conexion, $datos) {
    $sql = 'INSERT INTO solicitudes (nombre, empresa, correo, telefono, categoria_id, mensaje)
            VALUES (?, ?, ?, ?, ?, ?)';
    $conexion->prepare($sql)->execute([
        $datos['nombre'], $datos['empresa'], $datos['correo'],
        $datos['telefono'], $datos['categoria_id'], $datos['mensaje'],
    ]);
}

function actualizarSolicitud($conexion, $datos) {
    $sql = 'UPDATE solicitudes
            SET nombre = ?, empresa = ?, correo = ?, telefono = ?, categoria_id = ?, mensaje = ?
            WHERE id = ?';
    $conexion->prepare($sql)->execute([
        $datos['nombre'], $datos['empresa'], $datos['correo'],
        $datos['telefono'], $datos['categoria_id'], $datos['mensaje'],
        $datos['id'],
    ]);
}

function eliminarSolicitud($conexion, $id) {
    $conexion->prepare('DELETE FROM solicitudes WHERE id = ?')->execute([$id]);
}
