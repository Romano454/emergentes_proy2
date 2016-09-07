<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     session_start();
     if(md5($_POST['tmptxt']) != $_SESSION['key'])
     {
     //echo("Error: Nos has introducido el codigo correcto");
     header('Location: 10.php');
     }else{
     echo '<h1>BIENVENIDO '.strtoupper($_POST["usuario"]).'</h1>';
     }
    ?>
  </body>
</html>
