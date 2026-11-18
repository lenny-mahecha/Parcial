<?php
// formulario.php: VISTA. Formulario de solicitud; se usa para crear (inicio) y para editar (solicitudes)
// Si $editando trae datos, el formulario se llena y la acción es "actualizar"
?>
<form method="post" action="index.php">
  <input type="hidden" name="accion" value="<?= $editando ? 'actualizar' : 'crear' ?>">
  <input type="hidden" name="id" value="<?= $editando['id'] ?? '' ?>">

  <div class="row g-3">
    <div class="col-12 col-sm-6">
      <label class="form-label">Name</label>
      <input name="nombre" class="form-control" maxlength="80" required
             value="<?= htmlspecialchars($editando['nombre'] ?? '') ?>">
    </div>
    <div class="col-12 col-sm-6">
      <label class="form-label">Company</label>
      <input name="empresa" class="form-control" maxlength="80" required
             value="<?= htmlspecialchars($editando['empresa'] ?? '') ?>">
    </div>
    <div class="col-12 col-sm-6">
      <label class="form-label">Email</label>
      <input name="correo" type="email" class="form-control" maxlength="100" required
             value="<?= htmlspecialchars($editando['correo'] ?? '') ?>">
    </div>
    <div class="col-12 col-sm-6">
      <label class="form-label">Phone</label>
      <input name="telefono" class="form-control" maxlength="20" required
             value="<?= htmlspecialchars($editando['telefono'] ?? '') ?>">
    </div>
    <div class="col-12">
      <label class="form-label">What type of property are you looking for?</label>
      <select name="categoria_id" class="form-select" required>
        <?php foreach ($categorias as $c): ?>
          <option value="<?= $c['id'] ?>" <?= ($editando['categoria_id'] ?? '') == $c['id'] ? 'selected' : '' ?>>
            <?= htmlspecialchars($c['nombre']) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col-12">
      <label class="form-label">Message</label>
      <textarea name="mensaje" class="form-control" rows="3" required><?= htmlspecialchars($editando['mensaje'] ?? '') ?></textarea>
    </div>
    <div class="col-12">
      <button class="btn btn-negro"><?= $editando ? 'Save changes' : 'Send request' ?></button>
      <?php if ($editando): ?>
        <a href="index.php?pagina=solicitudes" class="btn btn-borde ms-2">Cancel</a>
      <?php endif; ?>
    </div>
  </div>
</form>
