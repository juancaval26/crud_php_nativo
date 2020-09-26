<?php
include_once "enrutador.php";
//conexion con mysqli = solo conecta con base
// de datos mysql
function conectarMysqli(){
                      //localhost,usuario,clave,basededatos
  $mysqli = new mysqli("localhost","root", "", "crudphp");
  $mysqli->set_charset("utf8");
  if (mysqli_connect_errno()) {
    printf("Fallo la conexión: %s\n", mysqli_connect_errno());
    echo "error de depuración: ".mysqli_connect_errno().PHP_EOL;
    echo "error de depuración: ".mysqli_connect_error().PHP_EOL;
    exit();
  }else{
    echo  "Conexion exitosa con Mysqli";
  }
}
//conexion con PDO
function conectarPDO(){
  $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
  $usuario = "root";
  $clave = "";
  $pdo = new PDO("mysql:host=localhost;dbname=colegio",
                                $usuario, $clave, $opciones);
  if ($pdo) {
    echo "Conexion exitosa con PDO";
  }else{
    echo "Error al conectar";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sistema Colegio</title>
  </head>
  <body>
    <div class="container-fluid">
      <section>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="?vista=inicio">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?vista=crearEstudiante">CREAR ESTUDIANTE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?vista=listarEstudiantes">LISTAR ESTUDIANTES</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
          </ul>
        </nav>
      </section>
    </div>
    <?php
    $enrutador = new Enrutador();
    if (!isset($_GET['vista'])) {
        $_GET['vista'] = "inicio";
        $enrutador->cargarVista($_GET['vista']);
    }
      else{
        $enrutador->cargarVista($_GET['vista']);
    }
     ?>
     <!--
     if(isset($_POST['btnGuardar'])):
       $name=$_POST['txtDocumento'];
       $captcha=$_POST['g-recaptcha-response'];
       $secret='6Ld33gAVAAAAAGYJcbXL0PSZQHJ6TPSzAMGQFB4c';
       if (!$captcha):
         echo 'por favor verifica el captcha';
       endif;
     endif;
    -->
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="g-recaptcha"
          data-sitekey="6Ld33gAVAAAAAH5oS1A1W6ufV1zenMFMX-3USaXy"
          data-callback='onSubmit'data-action='submit' hidden>enviar
        </button>
      </form>


  </body>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
  function onSubmit(token) {
    document.getElementById("demo-form").submit();
  }
</script>
</html>
