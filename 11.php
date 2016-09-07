<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Equipos</title>
  </head>
  <body>
    <br>
    <h2 align="center">GRUPO DE EQUIPOS</h2><br><br>
    <div align="center">
  	 <form action="" method="POST">
	  	 <table >
	  	   	<tr>
	  	   		<td><strong>Equipo 1:</strong></td>
	  	   		<td><input type="text" name="pe" placeholder="1er equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 2:</strong></td>
	  	   		<td><input type="text" name="se" placeholder="2do equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 3:</strong></td>
	  	   		<td><input type="text" name="te" placeholder="3er equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 4:</strong></td>
	  	   		<td><input type="text" name="ce" placeholder="4to equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 5:</strong></td>
	  	   		<td><input type="text" name="qe" placeholder="5to equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 6:</strong></td>
	  	   		<td><input type="text" name="sxe" placeholder="6to equipo" required="" style="width:100px;"></td>
	  	   	</tr>

	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
  	 	function llenararray($max)
  	 	{
  	 		$switch=0;
  	 		$numero=0;
  	 		$arr = array(-1,-1,-1,-1,-1,-1);
  	 		for ($i=0; $i <=$max-1 ; $i++) {
  	 			$c=0;
  	 			$numero=rand(0,5);
  	 			while ($c<=$i) {
  	 			  if ($numero==$arr[$c]) {
  	 			  		$c=0;
  	 			  		$numero=rand(0,5);
  	 			  	}
  	 			  	else{
  	 			  		$c++;

  	 			  	}
  	 			}
  	 			$arr[$i]=$numero;
  	 		}
  	 			return $arr;
  	 	}

  	 	if (isset($_POST["pe"]) && isset($_POST["se"]) && isset($_POST["te"]) && isset($_POST["ce"]) && isset($_POST["qe"]) && isset($_POST["sxe"])) {
	  			echo "<h2>Fixture de Partidos</h2>";
	  	 	$arr= llenararray(6);
	  	 	$arreq = array($_POST["pe"],$_POST["se"],$_POST["te"],$_POST["ce"],$_POST["qe"],$_POST["sxe"]);
	  	 	 	echo "<h5>-".strtoupper($arreq[$arr[0]])."- vs -".strtoupper($arreq[$arr[1]])."-<h5>";
	  	 		echo "<h5>-".strtoupper($arreq[$arr[2]])."- vs -".strtoupper($arreq[$arr[3]])."-<h5>";
	  	 		echo "<h5>-".strtoupper($arreq[$arr[4]])."- vs -".strtoupper($arreq[$arr[5]])."-<h5>";
  	 	}


  	 ?>
  </div>
  </body>
</html>
