<?php
require_once "controlador.php";
$estudianteC = new EstudianteC();
$estudianteC->eliminarE($_GET['id']);
if (isset($_GET['id'])) {
  $row = $estudianteC->buscarE($_GET['id']);
}
?>

<form  method="post">
  <div class="card">
      <div class="card-body">
        <div class="form-group">
            <h3 style="color: red;">¿Estas seguro de eliminar el estudiante?</h3>
                <td><?= $row["Nombres"]; ?></td>
                <td><?= $row["Documento"]; ?></td>
        </div>
        <div class="form-group">
              <button type="submit" name="btnEliminar" class="btn btn-success">Sí</button>
              <a href="#">
                <button type="submit" name="btnCancelar" class="btn btn-danger">No</button>
              </a>
        </div>
      </div>
  </div>
</form>
