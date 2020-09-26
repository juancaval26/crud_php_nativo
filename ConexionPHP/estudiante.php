<?php
include_once "conexion.php";
class Estudiante{
    //clase estilo modelo
    public $id;
    public $documento;
    public $nombres;
    public $notaD;
    public $notaC;
    public $notaP;
    public $prom;
    public $conexion;
    //constructor
    public function __construct(){
      $this->conexion = new Conexion();
    }
    //crear los SET y GET
    public function __SET($atributo, $valor){
      $this->$atributo = $valor;
    }
    public function __GET($atributo){
      return $this->$atributo;
    }
    //realizar acciones de la clase estudiante (Metodos)
    //Metodo listar estudiantes
    public function listarEstudiantes(){
        $sql = "SELECT Id, Documento, Nombres, NotaP,NotaD,
                            NotaC,Promedio FROM estudiantes";
        $tabla = $this->conexion->consultaRetorno($sql);
        return $tabla;
    }
    //Metodo crear estudiantes
    public function registrarEstudiante(){
      $sql = "INSERT INTO estudiantes(Documento,Nombres,
                      NotaP,NotaD,NotaC,Promedio)
              VALUES('{$this->documento}', '{$this->nombres}',
                 '{$this->notaP}','{$this->notaD}','$this->notaC',
                 '{$this->prom}' )";
      $this->conexion->consultaSimple($sql);
      return true;
    }
    //Metodo actualizar estudiantes
    public function editarEstudiante(){
      $sql ="UPDATE estudiantes SET
      Nombres = '{$this->nombres}',
      Documento = '{$this->documento}',
      NotaD = '{$this->notaD}',
      NotaP = '{$this->notaP}',
      NotaC = '{$this->notaC}',
      Promedio = '{$this->prom}'
      WHERE Id ='{$this->id}' ";
      $this->conexion->consultaSimple($sql);
      return true;
    }
    //Metodo eliminar estudiantes
    public function eliminarEstudiante(){
      $sql = "DELETE FROM estudiantes
              WHERE Id = '{$this->id}'";
      $this->conexion->consultaSimple($sql);
      return true;
    }
    //buscar estudiante por id
    public function buscarEstudianteId(){
      $sql = "SELECT * FROM estudiantes WHERE Id = '{$this->id}' LIMIT 1";
      $array = $this->conexion->consultaRetorno($sql);
      $fila = mysqli_fetch_assoc($array);
      return $fila;
    }

}
?>
