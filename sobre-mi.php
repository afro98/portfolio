<?php

$pg = "sobre mi";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    
    <header class="container">

      <?php include_once "menu.php"; ?>

    </header>

    <main>

      <section id="bio" class="container">
        
        <div class="row">
          <div class="col-12 col-sm-7">
            
            <h1 class="col-12 py-5">Sobre mi</h1>

            <p>Estudiante en DePC Suite. Futuro desarollador Full Stack.</p>

            <a href="contacto.php" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
          </div>

          <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
            <img src="images/IMG-20210609-WA0032.jpg" alt="Elias" class="foto-perfil">
          </div>

        </div>

      </section>

      <section id="stack">

        <div class="container">
          
          <div class="row">
            
            <div class="col-12">
              <h2 class="py-5">Stack tecnológico</h2>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Javascript</h3>
                <i class="fa-brands fa-js pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">HTML</h3>
                <i class="fa-brands fa-html5 pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">API Rest</h3>
                <i class="fa-solid fa-gears pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Laravel</h3>
                <i class="fa-brands fa-laravel pb-5"></i>
              </div>
            </div>
            
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Bootstrap</h3>
                <i class="fa-brands fa-bootstrap pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">MySQL</h3>
                <i class="fa-solid fa-database pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">CSS</h3>
                <i class="fa-brands fa-css3-alt pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Git</h3>
                <i class="fa-brands fa-git pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">React.js</h3>
                <i class="fa-brands fa-react pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Mercadopago</h3>
                <i class="fa-solid fa-wallet pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Amazon AWS</h3>
                <i class="fa-brands fa-aws pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Linux</h3>
                <i class="fa-brands fa-linux pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Apache</h3>
                <i class="fa-solid fa-server pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Paypal</h3>
                <i class="fa-brands fa-paypal pb-5"></i>
              </div>
            </div>

            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">PHP</h3>
                <i class="fa-brands fa-php pb-5"></i>
              </div>
            </div>

          </div>

        </div>

      </section>

      <section id="experiencia" class="container mb-4">

        <div class="row">
          <div class="col-12">
            <h2 class="pt-5 pb-4">Experiencia laboral</h2>
          </div>
        </div>

        <div class="row shadow">

          <div class="col-sm-2 d-none d-sm-block p-5">
            <img src="images/radio-nacional.jpg" alt="radio-nacional" class="img-fluid">
          </div>
          <div class="col-sm-10 col-12 my-3">
            <h3>Operación técnica</h3>
            <h4>Radio Nacional</h4>
            <h5>2020-2022</h5>
            <p>Operación técnica, musicalización y producción general en los programas: <br>
              - En la ruta otra vez <br>
              - Aire de casa <br>
              - El oro de los tigres <br>
              - Verano federal
            </p>
          </div>
        </div>

      </section>

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