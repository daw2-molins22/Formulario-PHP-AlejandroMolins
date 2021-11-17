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
 <h1>Comentario</h1>
<?php


echo '<table>';
    
    echo '<tr>';
    echo '<td>Usuario:</td>';
    echo '<td>' . $_POST['usuario'] . '</td>';
    echo '</tr><tr>';
    echo '<tr>';
    echo '<td> Fecha: </td>';
    echo '<td>' . $_POST['fecha'] . '</td>';
    echo '</tr><tr>';
    echo '<tr>';
    echo '<td>Calificación:</td>';
    echo '<td>' . $_POST['calificacion'] . '</td>';
    echo '</tr><tr>';
    echo '<td>Opinión:</td>';
  
echo '<td>' . nl2br($_POST['extra']) . '</td>';
echo '</tr>';
echo '</table>';


echo '<pre>';
print_r($_POST);
echo '</pre>';


$db = mysqli_connect('localhost', 'root', 'alex') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$pelicula=$_POST['pelicula'];
$nombre = $_POST['usuario'];
$fecha = $_POST['fecha'];
$opinion = $_POST['extra'];
$calificacion = $_POST['calificacion'];


$pelicula_id = "SELECT movie_id FROM movie WHERE movie_name LIKE '$pelicula'";
$resultado = mysqli_query($db, $pelicula_id);
$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);



 $query = <<<ENDSQL
        INSERT INTO reviews
        (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
        VALUES
        ($fila[movie_id],"$fecha","$nombre","$opinion","$calificacion");
ENDSQL;
        mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_error($db)==null){
          echo "<br>Comentario creado";
        }
        
?>
 </body>
</html>

