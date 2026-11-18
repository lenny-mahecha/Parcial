<?php // pie.php: VISTA. Pie de página, botón de WhatsApp y scripts ?>

<!-- SECCIÓN 9: Pie de página -->
<footer class="pie">
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-12 col-md-5">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img src="img/logo-blanco.svg" alt="Logo Business Alliance" width="34" height="34">
          <span class="fw-medium fs-5">Business Alliance</span>
        </div>
        <p class="text-white-50 mb-0">Rent, sale and management of commercial properties for business.</p>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <h6 class="fw-medium mb-3">Menu</h6>
        <ul class="list-unstyled">
          <li><a href="index.php#nosotros" class="enlace-pie">About Us</a></li>
          <li><a href="index.php#catalogo" class="enlace-pie">Catalog</a></li>
          <li><a href="index.php#como-trabajamos" class="enlace-pie">How We Work</a></li>
          <li><a href="index.php?pagina=solicitudes" class="enlace-pie">Requests</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <h6 class="fw-medium mb-3">Contacts</h6>
        <p class="text-white-50 mb-1"><i class="bi bi-geo-alt"></i> Bogotá, Colombia</p>
        <p class="text-white-50 mb-1"><i class="bi bi-envelope"></i> contacto@businessalliance.co</p>
        <p class="text-white-50 mb-0"><i class="bi bi-telephone"></i> +57 300 000 0000</p>
      </div>
    </div>
    <hr class="border-secondary">
    <p class="text-center text-white-50 small mb-0">&copy; <?= date('Y') ?> Business Alliance · Class project</p>
  </div>
</footer>

<!-- Botón flotante de WhatsApp (cambiar el número por el de ustedes, con 57 adelante) -->
<a href="https://wa.me/573000000000?text=Hello%2C%20I%20would%20like%20information%20about%20a%20property" class="whatsapp" target="_blank" title="Chat with us on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.js"></script>
<script src="libs/aos/aos.js"></script>
<script src="js/app.js"></script>
</body>
</html>
