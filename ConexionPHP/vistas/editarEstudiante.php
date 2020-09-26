<?php
require_once "controlador.php";
$estudianteC = new EstudianteC();
if (isset($_GET['id'])) {
  $row = $estudianteC->buscarE($_GET['id']);
}
if (isset($_POST['btnActualizar'])) {
  $estudianteC->editarE($_POST['txtDocumento'], $_POST['txtNombres'],
    $_POST['txtNotaC'], $_POST['txtNotaD'], $_POST['txtNotaP'], $_GET['id']);
}

?>
<form method="post">
<div class="container-fluid">
  <h1>EDITAR ESTUDIANTE</h1>
  <div class="card">
      <div class="card-body">
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label for="">Documento</label>
                <input type="text" class="form-control" name="txtDocumento" value="<?php echo $row['Documento'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="">Nombre completo</label>
                <input type="text" class="form-control" name="txtNombres" value="<?php echo $row['Nombres'] ?>" required>
              </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nota Conocimiento</label>
                    <input type="number" step="0.1" name="txtNotaC" value="<?php echo $row['NotaC'] ?>" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nota Desempeño</label>
                    <input type="number" step="0.1" name="txtNotaD" value="<?php echo $row['NotaD'] ?>" class="form-control" required>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nota Producto</label>
                  <input type="number" step="0.1" name="txtNotaP" value="<?php echo $row['NotaP'] ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btnActualizar" class="btn btn-success btn-block btn-lg">Actualizar</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</form>
