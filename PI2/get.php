<!DOCTYPE html>
<html>

  <body>
    <?php
    echo var_dump($_GET);
    ?>

    <form action="get.php">
      <label for="fname">Nome:</label>
      <input type="text" id="fname" name="fname">
      <input type="submit" value="Enviar" method="GET">
    </form>

  </body>

</html>