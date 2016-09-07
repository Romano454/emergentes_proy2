<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>dados</title>
  </head>
  <body>
    <h2 align="center">LANZAMIENTO DE DADOS</h2><br>
    <div align="center">
    <table cellspacing="20">
      <tr>
        <td style="background-color: black; color:white;">
        <form action="" method="POST">
          <h3>Lanzar 2 dados</h3>
          <input type="hidden" name="lanza" value="2">
          <input type="submit" name="enviar">
        </form></td>
        <td style="background-color: yellow;color:white;"><form action="" method="POST">
           <h3>Lanzar 5 dados</h3>
          <input type="hidden" name="lanza" value="5">
          <input type="submit" name="enviar">
        </form></td>
      </tr>
    </table>
      <?php
        if (isset($_POST["lanza"])) {

          if ($_POST["lanza"]==2)
              $dados= array("img/1.png","img/2.png","img/3.png","img/4.png","img/5.png","img/6.png");
            else
            $dados= array("img/1.png","img/2.png","img/3.png","img/4.png","img/5.png","img/6.png");

              for ($i=1 ; $i <= $_POST["lanza"] ; $i++) {
                echo '<div class="casillaimg">';
                 echo '<img src="'.$dados[rand(0,5)].'" width=70 height=70>';
                 echo "</div>";

              }
          /*}
          */
        }
      ?>
  </div>
  </body>
</html>
