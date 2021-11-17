<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
 
 <?php
 echo "<h1>Añadir Opinión</h1>";
 ?>

  <form action="N4P111formprocess.php" method="post">
   <table>

    <tr>
    <td>Pelicula</td>
    <td><input type="text" name="pelicula" /></td>
    </tr><tr>
    <td>Usuario</td>
    <td><input type="text" name="usuario" /></td>
    </tr><tr>
    <td>Fecha</td>
    <td><input type="date" name="fecha" /></td>
    </tr><tr>
     <td>Calificación</td>
     <td><input type="number" name="calificacion" min="0" max="5" /></td>
    </tr><tr>
     <td>Opinión Sobre La Pelicula</td>
     
     <td><textarea name="extra" rows="5" cols="60"></textarea></td>
    </tr><tr>
     <td colspan="2" style="text-align: center;">

      <input type="submit" name="submit" value="Añadir" />
     </td>
    </tr>
   </table>
  </form>
<?php


$db = mysqli_connect('localhost', 'root', 'alex') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

?>
 </body>
</html>

