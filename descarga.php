
<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'repaso_select') or die("Connection error: " . mysqli_connect_error());

$descargasQuery = "SELECT `nombre` FROM `programas` ORDER BY `descargas` DESC LIMIT 1" or die("Query error: " . mysqli_error($connection));

echo "<strong>" . mysqli_fetch_array(
    mysqli_query($connection, $descargasQuery)
)[0] . "</strong>";
