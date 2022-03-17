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
        <?php include('./descarga.php') ?>
      </div>
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
      <tr>
        <td colspan="3">
          <form>
            <input type="text" name="desc_buscar">
          </form>
        </td>
      </tr>
      <?php include('./buscar.php') ?>
    </table>

  </div>
</body>

</html>