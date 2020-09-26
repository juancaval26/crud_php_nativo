<?php
require_once "controlador.php";
$estudianteC = new EstudianteC();
if (isset($_GET['id'])) {
  $row = $estudianteC->buscarE($_GET['id']);
    $calif = "";
    if ($row["Promedio"] >= 3.5) {
      $calif = "Aprobó - A";
    }else{
      $calif = "Reprobó - D";
    }
}
?>
<div class="container-fluid">
  <h1>DATOS ESTUDIANTE</h1>
  <div class="card">
      <div class="card-body">
        <div class="form-group">
          <p>CÓDIGO: <?php echo $row['Id']; ?> </p>
        </div>
        <div class="form-group">
          <p>DOCUMENTO: <?php echo $row['Documento']; ?></p>
        </div>
        <div class="form-group">
          <p>NOMBRES: <?php echo $row['Nombres']; ?> </p>
        </div>
        <h3>NOTAS</h3>
        <div class="form-group">
          <p>CONOCIMIENTO: <?php echo $row['NotaC']; ?> </p>
        </div>
        <div class="form-group">
          <p>DESEMPEÑO: <?php echo $row['NotaD']; ?> </p>
        </div>
        <div class="form-group">
          <p>PRODUCTO: <?php echo $row['NotaP']; ?> </p>
        </div>
        <div class="form-group">
          <p>PROMEDIO: <?php echo $row['Promedio']; ?> </p>
        </div>
        <div class="form-group">
          <p>CALIFICACIÓN: <?php echo $calif; ?></p>
        </div>
        <div class="form-group">
            <a href="?vista=listarEstudiantes">
              <button type="button" name="button" class="btn btn-danger">Salir</button>
            </a>
        </div>
      </div>
  </div>
</div>
