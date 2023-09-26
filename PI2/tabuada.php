<!DOCTYPE html>
<html>

  <head>
    <title>Tabuada</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body>
    <form method="POST" action="" id="tabuadaForm">
      <label for="numero">Escolha um número:</label>
      <input name="numero" id="numero" onchange="this.form.submit()">
      </input>
    </form>
  </body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
      $numero = $_POST['numero'];

      echo "<h2>Tabuada do $numero:</h2>";
      echo "<table border='1'>";
      for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
      }
      echo "</table>";
    }
    ?>

    <script>
      $('#numero').on('change', function () {
        $('#tabuadaForm').submit();
      });
    </script>
</html>