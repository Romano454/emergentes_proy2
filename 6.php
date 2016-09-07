<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Bucle foreach</h2>
    <?php
    $lenguaje[]= array("C"=>"UNO C","C++"=>"DOS C++","java"=>"TRES JAVA","python"=>"CUATRO PYTHON");
    ?>
    <p>Recorremos el arreglo</p>
    <table border="1">
    	<tr>
    		<h>LENGUJE DE PROGRAMACION</h>
    	</tr>
    <?php
    foreach ($lenguaje as $fila)  ?>
      <tr>
    		<td><?= $fila["C"] ?></td>
    		<td><?= $fila["C++"] ?></td>
    		<td><?= $fila["java"] ?></td>
        <td><?= $fila["python"] ?></td>
    	</tr>
    </table>

  </body>
</html>
