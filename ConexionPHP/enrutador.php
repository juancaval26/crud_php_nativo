<?php
class Enrutador{
  //Crear metodo para cargar las vistas
  public function cargarVista($ruta){
    switch ($ruta) {
      case 'inicio':
        include_once "vistas/".$ruta.".php";
                  //vistas/inicio.php
        break;
      case 'crearEstudiante':
        include_once "vistas/".$ruta.".php";
        break;
      case 'editarEstudiante':
        include_once "vistas/".$ruta.".php";
        break;
      case 'verEstudiante':
        include_once "vistas/".$ruta.".php";
        break;
      case 'eliminarEstudiante':
        include_once "vistas/".$ruta.".php";
        break;
      case 'listarEstudiantes':
        include_once "vistas/".$ruta.".php";
        break;
      case 'index':
        include_once "$ruta.php";
        break;
      default:
        include_once "vistas/error.php";
        break;
      }
  }
}
?>
