<html>
    <head>
        <title>Formulario Numeros Alejandro Molins</title>
    </head>
    <body>
<?php
echo '<h1> Formulario Numeros Alejandro Molins </h1>';
$numerouno = $_POST['numerouno'];
$numerodos = $_POST['numerodos'];
$numerotres = $_POST['numerotres'];
$numerocuatro = $_POST['numerocuatro'];
$numerocinco = $_POST['numerocinco'];

echo "Suma total de los numeros introducidos son: " . $numerouno + $numerodos + $numerotres + $numerocuatro + $numerocinco;
?>
<pre>
    <strong>DEBUG:</strong>
<?php
print_r($_POST);

?>
</pre>
</body>
</html>