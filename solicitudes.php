<?php
// solicitudes.php: VISTA. Lista las solicitudes guardadas y permite editarlas o eliminarlas
// Variables del controlador: $solicitudes, $editando, $categorias
require __DIR__ . '/encabezado.php';
?>

<section class="container seccion">
  <h1 class="titulo">Received requests</h1>
  <p class="texto-gris mb-4">Records saved from the contact form.</p>

  <?php if ($editando): ?>
    <div class="contacto mb-5" data-aos="fade-up">
      <h5 class="mb-3">Edit request #<?= $editando['id'] ?></h5>
      <?php require __DIR__ . '/formulario.php'; ?>
    </div>
  <?php endif; ?>

  <div class="table-responsive contacto" data-aos="fade-up">
    <table class="table align-middle mb-0">
      <thead>
        <tr>
          <th>#</th><th>Name</th><th>Company</th>
          <th class="d-none d-md-table-cell">Email</th>
          <th class="d-none d-lg-table-cell">Property</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($solicitudes as $s): ?>
          <tr>
            <td><?= $s['id'] ?></td>
            <td><?= htmlspecialchars($s['nombre']) ?></td>
            <td><?= htmlspecialchars($s['empresa']) ?></td>
            <td class="d-none d-md-table-cell"><?= htmlspecialchars($s['correo']) ?></td>
            <td class="d-none d-lg-table-cell"><?= htmlspecialchars($s['categoria']) ?></td>
            <td class="text-nowrap">
              <a href="index.php?pagina=solicitudes&editar=<?= $s['id'] ?>" class="btn btn-sm btn-borde">Edit</a>
              <form method="post" action="index.php" class="d-inline" onsubmit="return confirm('Delete this request?')">
                <input type="hidden" name="accion" value="eliminar">
                <input type="hidden" name="id" value="<?= $s['id'] ?>">
                <button class="btn btn-sm btn-outline-danger rounded-pill">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php if (!$solicitudes): ?>
          <tr><td colspan="6" class="text-center texto-gris">There are no requests yet.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</section>

<?php require __DIR__ . '/pie.php'; ?>
