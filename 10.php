<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulario cap</title>
  </head>
  <body>
    <h2 align="center">FORMULARIO CAPTCHA</h2>
    <form action="captcha.php" method="POST">
   <table >
      <tr>
        <td><strong>Usuario:</strong></td>
        <td><input type="text" name="usuario" placeholder="Usuario" required="" ></td>
      </tr>
      <tr>
        <td><strong>Contraseña:</strong></td>
        <td><input type="password" name="clave" placeholder="Contraseña" required=""></td>
      </tr>
      <tr>
        <td><img src="cap.php" width="100" height="30"></td>
        <td><input type="text" name="tmptxt" required=""></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="enviar" value="enviar"></td>
      </tr>
   </table>

 </form>
  </body>
</html>
