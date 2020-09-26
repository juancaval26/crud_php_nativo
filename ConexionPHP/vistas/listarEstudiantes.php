<?php
  include_once "controlador.php";
  $estudianteC = new EstudianteC();
  $tablaE = $estudianteC->listarE();
 ?>
<div class="container-fluid">
  <h1>Lista de estudiantes del SENA</h1>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Documento</th>
        <th>Nombre Completo</th>
        <th>Nota Conocimiento</th>
        <th>Nota Desempeño</th>
        <th>Nota Producto</th>
        <th>Promedio</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tablaE as $data) : ?>
      <tr>
        <td> <?php echo $data['Id']; ?> </td>
        <td> <?php echo $data['Documento']; ?> </td>
        <td> <?php echo $data['Nombres']; ?> </td>
        <td> <?php echo $data['NotaP']; ?> </td>
        <td> <?php echo $data['NotaD']; ?> </td>
        <td> <?php echo $data['NotaC']; ?> </td>
        <td> <?php echo $data['Promedio']; ?> </td>
        <td>
          <a href="?vista=verEstudiante&id=<?php echo $data['Id']; ?>">
            <button type="button" name="button" class="btn btn-primary btn-xs">
                <i class="fa fa-eye"></i>
            </button>
          </a>
          <a href="?vista=editarEstudiante&id=<?php echo $data['Id']; ?>">
            <button type="button" name="button" class="btn btn-info btn-xs">
                <i class="fa fa-edit"></i>
            </button>
          </a>
          <a href="?vista=eliminarEstudiante&id=<?php echo $data['Id']; ?>">
            <button type="button" name="button" class="btn btn-danger btn-xs">
                <i class="fa fa-trash"></i>
            </button>
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
