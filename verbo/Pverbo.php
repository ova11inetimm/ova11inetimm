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

  <style type="text/css">
        #portada{
    background-repeat: no-repeat;
    background-attachment: no-repeat center center fixed;
    background-size: 100% 100%;
    height: 100%;
}
    </style>
    
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
                    <div id="portada" class='card-body' style="height: 500px; background-image: url(../img/verbo/P_verbo.png);">
                       
                    </div>
                </div>
                <div style="text-align:right;"><a href="verbo.php" data-toggle="tooltip" class="btn btn-primary" role="button" title="Siguiente">Next</a></div>
            </div>
        </div>
    </div>
</div>
   



    <script src="../js/jquery.min.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          $('.menuContainer').load('../menu.html');
        });

        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
  </body>
  </html>
 