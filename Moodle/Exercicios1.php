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
      <form method="POST" action="">
        <label for="numero">Digite um número maior que 1:</label>
        <input type="number" name="numero" id="numero" min="2" required>
        <input type="submit" value="Imprimir resultado">
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inteiro = $_POST["numero"];
        imprimirTriangulo($inteiro);
      }

      function imprimirTriangulo($n)
      {
        if ($n <= 1) {
          echo "O número deve ser maior que 1.";
          return;
        }

        for ($i = 1; $i <= $n; $i++) {
          for ($j = 1; $j <= $i; $j++) {
            echo $j;
          }
          echo "<br>";
        }
      }
      ?>
    </div>
  </body>

  <div>
    <h2>Exercício 3</h2>
    <?php
    function dividirString($string, $n)
    {
      $tamanho = strlen($string);

      if ($tamanho % $n !== 0) {
        echo "O tamanho da string não é divisível por $n.";
        return;
      }

      $tamanhoDaParte = $tamanho / $n;
      $partes = str_split($string, $tamanhoDaParte);

      foreach ($partes as $parte) {
        echo $parte . "<br>";
      }
    }

    $string1 = "a123b123";
    $inteiro1 = 2;
    echo "String: \"$string1\", inteiro: $inteiro1<br>";
    dividirString($string1, $inteiro1);

    $string2 = "abc";
    $inteiro2 = 3;
    echo "<br>String: \"$string2\", inteiro: $inteiro2<br>";
    dividirString($string2, $inteiro2);
    ?>

  </div>

</html>