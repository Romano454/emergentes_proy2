<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >

        .cimg{

	float: left;
	width: 90px;
	height: 90px;
	background-color: white;
	margin: 40px;
}
    </style>
  </head>
  <body>
    <h2 align="center">GALERIA DE IMAGENES</h2>
   	<?php
        	if (is_dir("img")) {
        		if ($dir=opendir("img")) {
        			while (($archivo= readdir($dir))!=false) {
        			if ($archivo != '.' && $archivo != '..' && $archivo != '.htaccess') {

        				echo '<div class="cimg">';
        				  echo '<a href="img/'.$archivo.'" target="_blank"><img src="img/'.$archivo.'" width=150 height=150></a>';
        				echo "</div>";
        			}
        			}
        		}
        	}
   	?>

  </body>
</html>
