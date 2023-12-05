<?php

$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    
    <header class="container">

        <?php include_once "menu.php"; ?>

    </header>

    <main class="container">
        
      <div class="row">
        <div class="col-12 mt-4 text-center div-cohete">
          <a href="proyectos.php"><img src="images/cohete.svg"></a>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
          <p class="py-1">Bienvenido/a a mi sitio web sobre docencia en sistemas.</p>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
          </div>
        </div>
      </div>

    </main>

    <footer class="container mt-auto py-4">

      <div class="row">
        
        <div class="col-sm-3 col-12">
          <a href="https://github.com/" target="_blank" title="Github"><i class="fa-brands fa-github px-2"></i></a>
          <a href="https://www.linkedin.com/in/elias-ochi-426a15285/" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>

        <div class="col-sm-3 col-12">
          Sponsor <a href="https://depcsuite.com/">DePC Suite</a>
        </div>

        <div class="col-sm-3 col-12">
          <a href="mailto:eliaspablo795@gmail.com">eliaspablo795@gmail.com</a>
        </div>

      </div>

      <a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

    </footer>

</body>
</html>