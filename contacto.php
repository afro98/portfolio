<?php

$pg = "contacto";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    
    <header class="container">

      <?php include_once "menu.php"; ?>

    </header>

    <main class="container">

      <div class="row">
        
        <div class="col-12 py-5">
          <h1>Contacto</h1>
        </div>
       
      </div>

      <div class="row">

        <div class="col-12 col-sm-6">
          <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
        </div>
          
        <div class="col-12 col-sm-6">
          
          <form action="" method="POST">

            <div class="pb-3">
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
            </div>

            <div class="pb-3">
              <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
            </div>

            <div class="pb-3">
              <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
            </div>

            <div class="pb-3">
              <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
            </div>

            <div>
              <button type="submit" id="btnEnviar" name="btnEnviar" class="btn px-3">ENVIAR</button>
            </div>

          </form>
        </div>
      </div>
    </main>

    <footer class="container mt-auto pb-4">

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