<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html>
        <head>
          <title>Principal</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="<?php echo URL?>Public/css/bootstrap.min.css">
            <script src="<?php echo URL?>Public/js/jquery-3.3.1.slim.min.js" ></script>
            <script src="<?php echo URL?>Public/js/bootstrap.min.js" ></script>
            <link rel="stylesheet" href="<?php echo URL?>Public/css/style.css">
            <script>
              $(document).on("ready",function(){
              $('.carousel').carousel({
                interval: 2000
              })
            });
            </script>
        </head>
        <body>
        <header>

          <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="#">Campamento Malacatepec..</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL?>inicio">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URL?>Login">Login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Otras</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Guias</a>
                  <a class="dropdown-item" href="#">Actividades</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Algo mas</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
          </nav>
        </header>
        <main class="container md-14">
          
      
    <?php
    }
    public static function footer()
    {
    ?>
        </main>
          <footer>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Contáctanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nuestras redes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ubicacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Quejas y sugerencias</a>
              </li>
            </ul>
          </footer> 
        </body>
        </html>
        <?php
    }
}