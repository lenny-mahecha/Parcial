<?php
// inicio.php: VISTA. Solo HTML; usa las variables que le pasa el controlador:
// $categorias, $propiedades, $categoria
require __DIR__ . '/encabezado.php';
?>

<!-- SECCIÓN 2: Portada -->
<section class="container mt-3">
  <div class="portada">
    <img src="https://i.pinimg.com/736x/85/59/80/85598020fd857859c603e7a834a48baa.jpg" alt="Corporate building"
         class="portada-img" onerror="this.src='img/edificio.svg'">
    <div class="portada-texto">
      <h1>Real Estate for <br>Business</h1>
      <p>Rent, sale, turnkey selection, rent, sale and management of properties for your business</p>
      <a href="#contacto" class="btn btn-blanco">Start cooperation</a>
    </div>
  </div>
</section>

<!-- SECCIÓN 3: Nosotros + cifras -->
<section id="nosotros" class="container seccion">
  <div class="row g-4 g-lg-5 align-items-start">
    <div class="col-12 col-lg-6" data-aos="fade-up">
      <h2 class="titulo">About Us</h2>
      <p class="texto-gris">
        Business Alliance is a federal network of commercial real estate agencies. We have been operating
        since 2015 and help companies — from startups to large corporations — find, rent, and buy office,
        warehouse, and retail spaces. Our team takes care of the search, negotiations, legal verification,
        and transaction support until the contract is signed.
      </p>
    </div>
    <div class="col-12 col-lg-5 offset-lg-1">
      <div class="row g-4">
        <div class="col-6" data-aos="zoom-in"><div class="cifra">10+</div><small>years in the market</small></div>
        <div class="col-6" data-aos="zoom-in" data-aos-delay="100"><div class="cifra">1000+</div><small>successful deals</small></div>
        <div class="col-6" data-aos="zoom-in" data-aos-delay="200"><div class="cifra">4000+</div><small>properties in our database</small></div>
        <div class="col-6" data-aos="zoom-in" data-aos-delay="300"><div class="cifra">95%</div><small>satisfied clients</small></div>
      </div>
    </div>
  </div>
</section>

<!-- SECCIÓN 4: Empresas aliadas -->
<section class="container">
  <div class="logos" data-aos="fade-up">
    <img src="img/logos/logo1.svg" alt="Partner 1">
    <img src="img/logos/logo2.svg" alt="Partner 2">
    <img src="img/logos/logo3.svg" alt="Partner 3">
    <img src="img/logos/logo4.svg" alt="Partner 4">
    <img src="img/logos/logo5.svg" alt="Partner 5">
    <img src="img/logos/logo6.svg" alt="Partner 6">
  </div>
</section>

<!-- SECCIÓN 5: Catálogo (carrusel con las categorías de la base de datos) -->
<section id="catalogo" class="container seccion">
  <div class="row g-4">
    <div class="col-12 col-lg-3" data-aos="fade-right">
      <h2 class="titulo">Property Catalog</h2>
      <p class="texto-gris small">A wide selection of real estate for your business</p>
    </div>
    <div class="col-12 col-lg-9" data-aos="fade-up">
      <div class="swiper carrusel">
        <div class="swiper-wrapper">
          <?php foreach ($categorias as $c): ?>
            <div class="swiper-slide">
              <a href="index.php?categoria=<?= $c['id'] ?>#propiedades" class="tarjeta-catalogo">
                <div class="tarjeta-img">
                  <img src="<?= htmlspecialchars($c['imagen']) ?>" alt="<?= htmlspecialchars($c['nombre']) ?>"
                       onerror="this.src='img/edificio.svg'">
                </div>
                <h5><?= htmlspecialchars($c['nombre']) ?></h5>
                <small class="texto-gris"><?= $c['total'] ?> properties</small>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="d-flex justify-content-end gap-2 mt-3">
        <button class="flecha flecha-anterior"><i class="bi bi-chevron-left"></i></button>
        <button class="flecha flecha-siguiente oscura"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>

<!-- SECCIÓN 6: Cómo trabajamos -->
<section id="como-trabajamos" class="container pb-5">
  <h2 class="titulo" data-aos="fade-up">How we work</h2>
  <p class="texto-gris small mb-4" data-aos="fade-up">We have made the process of working with us as<br>simple and transparent as possible</p>

  <div class="row g-4 g-lg-5 align-items-start">
    <div class="col-12 col-lg-5" data-aos="fade-right">
      <div class="foto-proceso">
        <img src="https://i.pinimg.com/736x/48/6a/77/486a77bf36c3d41731d277c686aa3024.jpg" alt="Glass building"
             onerror="this.src='img/edificio.svg'">
        <div class="insignia">Free<br>consultation</div>
      </div>
    </div>
    <div class="col-12 col-lg-6 offset-lg-1">
      <div class="paso" data-aos="fade-up">
        <span class="paso-icono"><i class="bi bi-chat-dots"></i></span>
        <div>
          <h5>Free consultation</h5>
          <p>Consultation and needs analysis. At this stage, we determine what type of property you need.</p>
        </div>
      </div>
      <div class="paso" data-aos="fade-up">
        <span class="paso-icono"><i class="bi bi-search"></i></span>
        <div>
          <h5>Search and selection of properties</h5>
          <p>We offer only verified properties that match your budget and goals.</p>
        </div>
      </div>
      <div class="paso" data-aos="fade-up">
        <span class="paso-icono"><i class="bi bi-sliders"></i></span>
        <div>
          <h5>Property viewing and assessment</h5>
          <p>We arrange property viewings and provide a complete information overview.</p>
        </div>
      </div>
      <div class="paso" data-aos="fade-up">
        <span class="paso-icono"><i class="bi bi-file-earmark-text"></i></span>
        <div>
          <h5>Document verification and preparation</h5>
          <p>We conduct a comprehensive review of all documents and ownership rights.</p>
        </div>
      </div>
      <div class="paso" data-aos="fade-up">
        <span class="paso-icono"><i class="bi bi-hand-thumbs-up"></i></span>
        <div>
          <h5>Transaction support</h5>
          <p>We provide support in concluding the contract and accompany you at all stages.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECCIÓN 7: Propiedades disponibles (datos de la base de datos, filtro por GET) -->
<section id="propiedades" class="container seccion">
  <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
    <h2 class="titulo mb-0" data-aos="fade-up">Available properties</h2>
    <div class="filtros">
      <a href="index.php#propiedades" class="filtro <?= !$categoria ? 'activo' : '' ?>">All</a>
      <?php foreach ($categorias as $c): ?>
        <a href="index.php?categoria=<?= $c['id'] ?>#propiedades"
           class="filtro <?= $categoria == $c['id'] ? 'activo' : '' ?>"><?= htmlspecialchars($c['nombre']) ?></a>
      <?php endforeach; ?>
    </div>
  </div>

  <?php if (!$propiedades): ?>
    <p class="texto-gris">There are no properties in this category.</p>
  <?php endif; ?>

  <div class="row g-4">
    <?php foreach ($propiedades as $p): ?>
      <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
        <div class="propiedad">
          <div class="propiedad-img">
            <img src="<?= htmlspecialchars($p['imagen']) ?>" alt="<?= htmlspecialchars($p['titulo']) ?>"
                 loading="lazy" onerror="this.src='img/edificio.svg'">
            <span class="operacion"><?= $p['operacion'] ?></span>
          </div>
          <div class="p-3">
            <small class="texto-gris"><?= htmlspecialchars($p['categoria']) ?> · <?= htmlspecialchars($p['ciudad']) ?></small>
            <h6 class="my-1"><?= htmlspecialchars($p['titulo']) ?></h6>
            <div class="d-flex justify-content-between">
              <span class="fw-medium">$<?= number_format($p['precio'], 0, '.', ',') ?></span>
              <small class="texto-gris"><?= number_format($p['area'], 0, '.', ',') ?> m²</small>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- SECCIÓN 8: Contacto (formulario que guarda en la base de datos por POST) -->
<section id="contacto" class="container seccion">
  <div class="contacto" data-aos="fade-up">
    <div class="row g-4">
      <div class="col-12 col-lg-5">
        <h2 class="titulo">Let's work together</h2>
        <p class="texto-gris">Leave us your details and an advisor will contact you for a free consultation.</p>
        <a href="index.php?pagina=solicitudes" class="enlace-flecha">View received requests <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="col-12 col-lg-7">
        <?php
          $editando = null;      // en el inicio el formulario siempre crea
          require __DIR__ . '/formulario.php';
        ?>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/pie.php'; ?>
