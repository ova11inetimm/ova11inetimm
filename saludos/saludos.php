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
                        <center><img src="../img/saludos/titulo_S.png" class="img-fluid" alt="Responsive image"></center>
                    </div>
                    <div class='card-body' style="height: 500px">
                       <center><img src="../img/saludos/P_Saludos.png" class="img-fluid" alt="Responsive image"></center>
                    </div>
                </div>
                <div style="text-align:right;"><a href="saludos1.php" data-toggle="tooltip" class="btn btn-primary" role="button" title="Siguiente">Next</a></div>
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
 