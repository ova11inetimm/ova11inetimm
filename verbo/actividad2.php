<?php
session_start();

?>
<script type="text/javascript">
{
if(history.forward(1))
location.replace(history.forward(1))
}
</script>

<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/logo.ico">
  <title>Inicio</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/menu_v.css">


  </head>
    
  <body>
    <div class='dashboard'>
        <div class="menuContainer"></div>

    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <center><img src="../img/verbo/tituloVerb.png" class="img-fluid" alt="Responsive image"></center>
                    </div>
                    <div class='card-body'>
                        <center><iframe  class="section d-flex justify-content-center embed-responsive embed-responsive-16by3" src="https://wordwall.net/es/embed/13117fd4ea2847828e4441be4947b229?themeId=46&templateId=36&fontStackId=0" width="500" height="450" frameborder="0" allowfullscreen></iframe></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   



    <script src="../js/jquery.min.js" ></script>
    <script src="../js/jquery-3.3.1.slim.min.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          $('.menuContainer').load('../menu.html');
        });
    </script>
  </body>
  </html>