<!DOCTYPE html>
<html>

  <body>
    <div>
      <h2>Exercício 1</h2>
      <?php
      function intervalo($a, $b)
      {
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

    <div>
      <h2>Exercício 4</h2>
      <?php
      function compressString($input)
      {
        $compressed = '';
        $length = strlen($input);

        if ($length === 0) {
          return $compressed;
        }

        $currentChar = $input[0];
        $count = 1;

        for ($i = 1; $i < $length; $i++) {
          if ($input[$i] === $currentChar) {
            $count++;
          } else {
            $compressed .= $currentChar . ($count > 1 ? $count : '');
            $currentChar = $input[$i];
            $count = 1;
          }
        }

        $compressed .= $currentChar . ($count > 1 ? $count : '');

        return $compressed;
      }

      $string = "qqwwweeeerrrrrtyy";
      $compressedString = compressString($string);
      echo $compressedString;
      ?>
    </div>

    <div>
      <h2>Exercício 5</h2>
      <?php
      //5
      function gerarFibonacci($n)
      {
        $fibonacci = [0, 1];

        for ($i = 2; $i <= $n; $i++) {
          $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
      }

      $n = 7;
      $resultado = gerarFibonacci($n);

      foreach ($resultado as $valor) {
        echo $valor . "<br>";
      }
      ?>
    </div>

    <div>
      <h2>Exercício 6</h2>
      <? function soma(...$args)
      {
        return array_sum($args);
      }

      $resultado1 = soma(1, 2);
      $resultado2 = soma(1, 2, 8);

      echo $resultado1 . "<br>";
      echo $resultado2 . "<br>";
      ?>
    </div>

    <div>
      <h2>Exercício 7</h2>
      <?php
      $n = 4;
      function imprimirNumeros($n)
      {
        $counter = 1;
        for ($i = 1; $i <= $n; $i++) {
          for ($j = 1; $j <= $i; $j++) {
            echo $counter++;
            echo " ";
          }
          echo "<br>";
        }
      }
      function imprimirEspacosEContagem($n)
      {
        $counter = 1;
        for ($i = 1; $i <= $n; $i++) {
          for ($j = $n; $j >= 1; $j--) {
            if ($j > $i) {
              echo "&nbsp; &nbsp;";
            } else {
              echo $counter++;
              if ($j < $i) {
                echo "&nbsp; &nbsp;";
              }
            }
          }
          echo "<br>";
        }
      }

      imprimirNumeros($n);
      echo "<br>";
      imprimirEspacosEContagem($n);
      ?>
    </div>

    <div>
      <h2>Exercício 8</h2>
      <?php
      function criarTabela($titulo, $numColunas, $numLinhas)
      {
        echo "<table border='1'>";
        echo "<caption style='border: 1px solid black; padding: 2px;'>$titulo</caption>";

        for ($i = 1; $i <= $numLinhas; $i++) {
          echo "<tr>";
          for ($j = 1; $j <= $numColunas; $j++) {
            echo "<td>L{$i}C{$j}</td>";
          }
          echo "</tr>";
        }

        echo "</table>";
      }

      criarTabela("Teste", 4, 2);
      ?>

    </div>
  </body>

</html>