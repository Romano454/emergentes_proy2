<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fecha</title>
  </head>
  <body>
    <br>
    <h2 align="center">FECHA EN CARACTERES</h2><br><br>
    <div align="center" >
    <form action="" method="POST">
	  	 <table >
	  	   	<tr>
	  	   		<td><strong>Fecha:</strong></td>
	  	   		<td><input type="date" name="fecha" style="width:150px;"></td>
	  	   	</tr>

	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
  	 	$meses = array('01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');
  	 	if (isset($_POST["fecha"])) {
  	 		$fecha= strtotime($_POST["fecha"]);
  	 		//echo $fecha;
  	 		echo "<h3>".date("d",$fecha)." de ".$meses[date("m",$fecha)]." de ". date("Y",$fecha)."</h3>";

  	 	}
  	 ?>
</div>
  </body>
</html>
