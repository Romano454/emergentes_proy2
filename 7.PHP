<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
</head>
<body>
    <br>
	<h1 align="center">INGRESE TRES NUMEROS</h1>
    <form action="" method="POST">
         <label>Numero1</label>
         <input type="number" name="n1" placeholder="1er">
         <br>
          <label>Numero2</label>
         <input type="number" name="n2" placeholder="2do">
         <br>
          <label>Numero3</label>
         <input type="number" name="n3" placeholder="3ro">
         <br>
         <input type="submit" value="enviar">
    </form>
    <?php
		if (isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"]) ) {
		       		$a=$_POST["n1"];
		       		$b=$_POST["n2"];
		       		$c=$_POST["n3"];
		       		if ($a > $b && $a > $c) {
			       			if ($b > $c) {
			       					echo "<strong>mayor: $a<br></strong>";
			       					echo "<strong>medio: $b<br></strong>";
			       					echo "<strong>menor: $c<br></strong>";
			       				}
			       				else{
			       				    echo "<strong>mayor: $a<br></strong>";
			       					echo "<strong>medio: $c<br></strong>";
			       					echo "<strong>menor: $b<br></strong>";
			       				}

		       			}
		       			else
		       			{
		       				if ($b > $a && $b > $c) {
									if ($a > $c) {
			       					echo "<strong>mayor: $b<br></strong>";
			       					echo "<strong>medio: $a<br></strong>";
			       					echo "<strong>menor: $c<br></strong>";
			       				}
			       				else{
			       				    echo "<strong>mayor: $b<br></strong>";
			       					echo "<strong>medio: $c<br></strong>";
			       					echo "<strong>menor: $a<br></strong>";
			       				}
			       			}
			       			else{
			       			   if ($c > $a && $c > $b) {
										if ($a > $b) {
					       					echo "<strong>mayor: $c<br></strong>";
					       					echo "<strong>medio: $a<br></strong>";
					       					echo "<strong>menor: $b<br></strong>";
					       				}
					       				else{
					       				    echo "<strong>mayor: $c<br></strong>";
					       					echo "<strong>medio: $b<br></strong>";
					       					echo "<strong>menor: $a<br></strong>";
					       				}
			       				}
			       				else{
			       					       echo "<strong>dos o mas numeros son iguales<br></strong>";

			       				}
			       			}
		       			}
		       }
		  	 ?>
</body>
</html>
