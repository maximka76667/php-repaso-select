<?php
      extract($_GET);

      if (!isset($desc_buscar)) $desc_buscar = '';

      $connection = mysqli_connect('localhost', 'root', 'root', 'repaso_select') or die("Connection error: " . mysqli_connect_error());

      $programasQuery = "
	      SELECT `nombre`, `version`, `descripcion` 
	      FROM `programas` 
	      WHERE `descripcion` LIKE " . "'%$desc_buscar%'" .
        "ORDER BY `puntuacion` DESC, `votos` DESC"
        or die("Query error: " . mysqli_error($connection));

      $result = mysqli_query($connection, $programasQuery);

      if ($result) {
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['nombre'] . "</td>";
          echo "<td>" . $row['version'] . "</td>";
          echo "<td>" . $row['descripcion'] . "</td>";
          echo "</tr>";
        }
      }
