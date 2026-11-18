<?php
// gracias.php: VISTA. Página de confirmación después de enviar el formulario
require __DIR__ . '/encabezado.php';
?>

<section class="container gracias">
  <div class="gracias-caja">
    <div class="check"><i class="bi bi-check-lg"></i></div>
    <h1 class="titulo">Thank you!</h1>
    <p class="texto-gris fs-5">
      <?= $tipo === 'actualizado'
          ? 'The request was updated successfully.'
          : 'We received your request. An advisor will contact you soon.' ?>
    </p>
    <a href="index.php" class="btn btn-negro">Back to home</a>
  </div>
</section>

<?php require __DIR__ . '/pie.php'; ?>
