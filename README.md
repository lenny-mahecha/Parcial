# Business Alliance

Réplica de un diseño de Pinterest: sitio de una inmobiliaria de inmuebles comerciales.
Proyecto de Desarrollo web y móvil.

## Tecnologías
- PHP 8 con patrón MVC y PDO
- MariaDB / phpMyAdmin
- Bootstrap 5
- Swiper (carrusel) y AOS (animaciones)

## Estructura (MVC)
```
business-alliance/
├── index.php                          punto de entrada: llama al controlador que corresponde
├── conexion.php                       datos de la base de datos
├── controllers/
│   ├── HomeController.php             CONTROLADOR de la página de inicio
│   └── SolicitudController.php        CONTROLADOR del CRUD de solicitudes
├── modelo/modelo.php                  MODELO (consultas SQL)
├── vistas/                            VISTAS (HTML)
├── css/  js/  img/
├── libs/aos/                          librería AOS instalada
└── base_datos/business_alliance.sql   exportado desde phpMyAdmin
```

## Cómo correrlo en XAMPP
1. Copiar la carpeta `business-alliance` dentro de `C:\xampp\htdocs`.
2. En phpMyAdmin crear la base de datos `business_alliance` (utf8mb4_general_ci).
3. Pestaña Importar → elegir `base_datos/business_alliance.sql` → Importar.
4. Abrir `http://localhost/business-alliance`.
