<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
  <title>AlmacénMAIE</title>
  <link rel="icon" href="vistas/img/plantilla/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

  <!-- plugin de javascript-->

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

</head>

<!--CUERPO DEL DOCUMENTO-->

<body class="hold-transition sidebar-collapse sidebar-mini">

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

    echo '<div class="wrapper">';

    include "modulos/cabezote.php";
    include "modulos/menu.php";

#contenido

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "categorias" ||
        $_GET["ruta"] == "productos" ||
        $_GET["ruta"] == "clientes" ||
        $_GET["ruta"] == "ventas" ||
        $_GET["ruta"] == "crear-ventas" ||
        $_GET["ruta"] == "reportes" ||
        $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

    }else{

      include "modulos/404.php";
    }

  }else{

    include "modulos/inicio.php";
  }
#fin contenido

  include "modulos/footer.php";

  echo '</div>';

}else{

  include "modulos/login.php";
}

?>




<script src="vistas/js/plantilla.js"></script>
</body>
</html>
