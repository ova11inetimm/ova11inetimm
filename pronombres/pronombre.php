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
    <link rel="stylesheet" href="../css/color.css">
    <style>
        video {
            max-width: 100%;
            height: auto;
            box-shadow: 6px 6px 3px #1C1C1C;
    </style>


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
                        <center><img src="../img/pronombre/titulo.png" class="img-fluid" alt="Responsive image"></center>
                    </div>
                    <div class='card-body' style="text-align: center; margin-top: -10px;">
                        <video class="embed-responsive-item" width="830" height="500" controls preload>
                            <source src="../video/pronombre/pronombres.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p style="margin-top: 5px;"><a href="https://cutt.ly/gVryMDh">Video de tomado del canal de Youtube Amigo Mumu Español</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   



    <script src="../js/jquery.min.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script type="text/javascript">
         /*Cargar menu vertical*/
        $(document).ready(function () {
          $('.menuContainer').load('../menu.html');
        });


        $(document).ready(function(){
          $('[data-toggle="tooltip modal"]').tooltip();
        });

          $(document).ready(function(){
    $('.carousel').carousel({
      interval: 30000
    });
  });

    </script>

  </body>
  </html>