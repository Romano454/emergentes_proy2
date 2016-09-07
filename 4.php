<html lang="es">
    <head>
        <title> Tablero de Ajedrez </title>
        <style>
                body {
                        background: #fff;
                }
		.casilla {
			width: 70px;
			height: 60px;
			text-align: center;
			line-height: 50px;
			font-size: 36pt;
			float: left;
			color: #1b1b1b;
		}
		.casilla:nth-child(even) {
			background: #141414;
			color: white;
		}
		.tablero {
			background: #f7f7f7;
			width: 500px;
			overflow: hidden;
			margin: auto;
			box-shadow: 0px 0px 20px #ccc;
		}
	</style>
</head>
<body>
	<br>
	<h1 align="center">Tablero de Ajedrez</h1>
	<br>
	<div class="tablero">
		<?php
		$i = 1;
    $c=1;
		while ($i <= 63) {
			echo "<div class=\"casilla\">".$c."</div>";
			$i++;
        $c=$i*$i;
		}
		?>
	</div>
</body>
</html>
