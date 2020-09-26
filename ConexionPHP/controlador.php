<?php
include_once "estudiante.php";
class EstudianteC{
    public $estudiante;
    public function __construct(){
      $this->estudiante = new Estudiante();
    }
    public function listarE(){
      $tabla = $this->estudiante->listarEstudiantes();
      return $tabla;
    }
    public function crearE($documento,$nombres,$notaC,$notaD,$notaP){
      if (isset($_POST['btnGuardar'])){
      $prom = round(($notaC+$notaP+$notaD)/3, 1);
      $this->estudiante->__SET("documento", $documento);
      $this->estudiante->__SET("nombres", $nombres);
      $this->estudiante->__SET("notaD", $notaD);
      $this->estudiante->__SET("notaC", $notaC);
      $this->estudiante->__SET("notaP", $notaP);
      $this->estudiante->__SET("prom", $prom);
      $res = $this->estudiante->registrarEstudiante();
      // var_dump($res);
      // exit();
          if ($res==true) {
              echo "Registro exitoso";
              return $res;
          }else{
              echo "No se registro correctamente";
              return $res;
          }
        }
    }
    public function editarE($documento,$nombres,$notaC,$notaD,$notaP,$id){
      if (isset($_POST['btnActualizar'])) {
      $prom = round(($notaC+$notaP+$notaD)/3, 1);
      $this->estudiante->__SET("documento", $documento);
      $this->estudiante->__SET("nombres", $nombres);
      $this->estudiante->__SET("notaD", $notaD);
      $this->estudiante->__SET("notaC", $notaC);
      $this->estudiante->__SET("notaP", $notaP);
      $this->estudiante->__SET("prom", $prom);
      $this->estudiante->__SET("id", $id);
      $result = $this->estudiante->editarEstudiante();
      if ($result == true) {
        header("Location: ?vista=listarEstudiantes");
      }else{
        echo "No se actualizo";
        header("Location: ?vista=listarEstudiantes");
      }
    }
    }
    public function eliminarE($id){
      if (isset($_POST['btnEliminar'])) {
        $this->estudiante->__SET("id", $id);
        $result = $this->estudiante->eliminarEstudiante();
          if ($result == true) {
            echo "Se elimino correctamente";
            header("Location: ?vista=listarEstudiantes");
          }
      }
      if (isset($_POST['btnCancelar'])) {
          echo "No se elimino el estudiante";
          header("Location: ?vista=listarEstudiantes");
        }
  }
    public function buscarE($id){
      $this->estudiante->__SET("id", $id);
      $data = $this->estudiante->buscarEstudianteId();
      return $data;
    }

  }

?>
