<?php // encabezado.php: VISTA. <head> y barra de navegación que comparten todas las páginas ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Business Alliance | Commercial Real Estate</title>
  <link rel="icon" href="img/logo.svg">

  <!-- Fuente -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
  <!-- Bootstrap y sus íconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Librería del carrusel: Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.css">
  <!-- Librería adicional instalada en el proyecto: AOS (animaciones al hacer scroll) -->
  <link rel="stylesheet" href="libs/aos/aos.css">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- SECCIÓN 1: Barra de navegación -->
<nav class="navbar navbar-expand-lg barra sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="img/logo.svg" alt="Logo Business Alliance" width="34" height="34">
      <span class="lh-1">
        <span class="marca">Business Alliance</span><br>
        <small class="submarca">Commercial Real Estate</small>
      </span>
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto gap-lg-4">
        <li class="nav-item"><a class="nav-link enlace-menu" href="index.php#nosotros">About Us</a></li>
        <li class="nav-item"><a class="nav-link enlace-menu" href="index.php#catalogo">Catalog</a></li>
        <li class="nav-item"><a class="nav-link enlace-menu" href="index.php#como-trabajamos">How We Work</a></li>
        <li class="nav-item"><a class="nav-link enlace-menu" href="index.php#contacto">Contacts</a></li>
      </ul>
    </div>
  </div>
</nav>
