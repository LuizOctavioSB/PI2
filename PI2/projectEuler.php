<?php
$numero = 2;
$expoente = 1000;
$resultado = bcpow($numero, $expoente);
$soma = 0;

for ($i = 0; $i < strlen($resultado); $i++) {
  $soma += intval($resultado[$i]);
}

echo $soma;

echo array_sum(str_split(bcpow(2, 1000)));
?>

<?php
$total = 0;

for ($i = 3; $i < 1000; $i++) {
  if ($i % 3 == 0 || $i % 5 == 0) {
    $total += $i;
  }
}

echo "multiplos de 3 e 5: " . $total;
?>

<?php
$max = 4000000;
$val1 = 1;
$val2 = 2;
$soma = 0;

while ($val1 <= $max) {
  if ($val1 % 2 == 0) {
    $soma += $val1;
  }

  $prox = $val1 + $val2;
  $val1 = $val2;
  $val2 = $prox;
}

echo "Fibonacci: " . $soma;
?>

<?php
function maiorPrimo($n)
{
  $maior = 0;

  while ($n % 2 == 0) {
    $maior = 2;
    $n = $n / 2;
  }

  for ($i = 3; $i <= sqrt($n); $i = $i + 2) {
    while ($n % $i == 0) {
      $maior = $i;
      $n = $n / $i;
    }
  }

  if ($n > 2) {
    $maior = $n;
  }

  return $maior;
}

$numero = 600851475143;
$resultado = maiorPrimo($numero);

echo $resultado;
?>

<?php
function Palindromo($numero)
{
  $numeroStr = strval($numero);

  return $numeroStr === strrev($numeroStr);
}

$maiorPalindromo = 0;

for ($i = 999; $i >= 100; $i--) {
  for ($j = $i; $j >= 100; $j--) {
    $produto = $i * $j;

    if (Palindromo($produto) && $produto > $maiorPalindromo) {
      $maiorPalindromo = $produto;
    }
  }
}

echo $maiorPalindromo;
?>