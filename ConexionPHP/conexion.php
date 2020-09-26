<?php
class Conexion{
  //atributos
  public $host;//servidor
  public $user;//usuario
  public $pass;//clave
  public $db;#base de datos
  public $con;//conexiones
  //contructor
  public function __construct(){
      $this->host = "localhost";
      $this->user = "root";
      $this->pass = "";
      $this->db = "crud";
      $this->con = new Mysqli($this->host, $this->user,$this->pass, $this->db);
      $this->con->set_charset("utf8");
  }
  //metodos
  //metodo para insertar, actualizar y eliminar
  public function consultaSimple($query){
    try {
      $consulta = $this->con->query($query);
    } catch (Exception $e) {
        echo 'Error: '.$e->getMessage();
    }
  }
  //metodo para listar tabla, arrays o un dato (Select)
  public function consultaRetorno($query){
    try {
        $consulta = $this->con->query($query);
        return $consulta;
    } catch (Exception $e) {
      echo 'Error: '.$e->getMessage();
    }
  }
}
?>
