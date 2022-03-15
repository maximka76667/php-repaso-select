<!DOCTYPE html>
<html>

<head>
  <title>El mejor software: Inicio</title>
  <meta charset="utf-8"> <!-- Codificación utf8 -->
  <link rel="stylesheet" href="estilos.css" />
</head>

<body>
  <div id="principal">
    <header>
      <div id="enlaces">

        <a href='#'>Login</a> | <a href='#'>Alta</a>

      </div>

      <div id="eslogan">
        <h1><a href="inicio.php">El mejor software</a></h1>
      </div>
      <div style="clear:both;text-align:right">Programa más descargado:
        <?php
        $connection = mysqli_connect('localhost', 'root', 'root', 'repaso_select') or die("Connection error: " . mysqli_connect_error());

        $descargasQuery = "SELECT `nombre` FROM `programas` ORDER BY `descargas` DESC LIMIT 1" or die("Query error: " . mysqli_error($connection));

        echo mysqli_fetch_array(
          mysqli_query($connection, $descargasQuery)
        )[0];

        ?></div>
    </header>

    <div id="contenido">
      <strong>El mejor software</strong>. La mejor selección de software.
    </div>

    <table class="table">
      <tr>
        <td>Name</td>
        <td>Version</td>
        <td>Description</td>
      </tr>
      <?php
      $connection = mysqli_connect('localhost', 'root', 'root', 'repaso_select') or die("Connection error: " . mysqli_connect_error());

      $programasQuery = "
	SELECT `nombre`, `version`, `descripcion` 
	FROM `programas` 
	ORDER BY `puntuacion` DESC, `votos` DESC
	" or die("Query error: " . mysqli_error($connection));

      $result = mysqli_query($connection, $programasQuery);

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['version'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "</tr>";
      }
      ?>
    </table>

  </div>
</body>

</html>