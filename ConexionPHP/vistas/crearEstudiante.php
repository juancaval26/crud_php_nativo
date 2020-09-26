<?php
require_once "controlador.php";
$estudianteC = new EstudianteC();
if (isset($_POST['btnGuardar'])) {
echo $estudianteC->crearE($_POST['txtDocumento'],$_POST['txtNombres'],$_POST['txtNotaC'], $_POST['txtNotaD'], $_POST['txtNotaP']);
}
?>
<form method="post">
<div class="container-fluid">
  <h1>CREAR ESTUDIANTE</h1>
  <div class="card">
      <div class="card-body">
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label for="">Documento</label>
                <input type="text" class="form-control" name="txtDocumento" value="" required>
              </div>
              <div class="form-group">
                <label for="">Nombre completo</label>
                <input type="text" class="form-control" name="txtNombres" value="" required>
              </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nota Conocimiento</label>
                    <input type="number" step="0.1" name="txtNotaC" value="" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nota Desempeño</label>
                    <input type="number" step="0.1" name="txtNotaD" value="" class="form-control" required>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nota Producto</label>
                  <input type="number" step="0.1" name="txtNotaP" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btnGuardar" class="btn btn-info btn-block btn-lg">Guardar</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</form>
