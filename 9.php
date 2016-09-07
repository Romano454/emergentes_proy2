<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulario</title>
  </head>
  <body>
    <br>
    <h2 align="center">FORMULARIO</h2>
    <div align="center">
    <form action="" method="POST">
	  	 <table >
	  	   		<td><strong>Nombre:</strong></td>
	  	   		<td><input type="text" name="nombre" placeholder="Nombre" required="" style="width:150px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Apellidos:</strong></td>
	  	   		<td><input type="text" name="apellidos" placeholder="Apellidos" required="" style="width:150px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Correo:</strong></td>
	  	   		<td><input type="email" name="correo" placeholder="Correo electronico" required="" style="width:150px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Cometario:</strong></td>
	  	   		<td><textarea name="comentario" placeholder="Tu comentario nos interesa" required="" style="width:100%; height:100%px"></textarea></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
        if (isset($_POST["nombre"])) {
        	echo "<p><strong>Nombre : </strong>".strtoupper($_POST['nombre'])." ".strtoupper($_POST['apellidos'])."</p>";
        	echo "<p><strong>Email : </strong>".$_POST['correo']."</p>";
        	echo "<p><strong>Comentario : </strong>".$_POST['comentario']."</p>";
        }
  	 ?>
       </div>
  </body>
</html>
