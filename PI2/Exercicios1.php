<!DOCTYPE html>
<html>

  <body>
    <div>
      <h2>Exercício 1</h2>
      <?php
      function intervalo($a, $b)
      {
        echo "O intervalo entre " . $a . " e " . $b . " é: ";
        for ($i = $a; $i <= $b; $i++) {
          echo $i . " ";
        }
      }

      intervalo(0, 10);
      ?>
    </div>

    <div>
      <h2>Exercício 2</h2>
      <p>Insira um numero inteiro maior que 1</P>
      <input type="text" id="num" name="num">
      <input type="submit">
    </div>
  </body>

</html>