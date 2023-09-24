<?php
function makecoffee($op = "café")
{
  if ($op == null)
    $op = "café";
  return "Fazendo $op!\n";
}

echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?>

<?php
function fatorial($num)
{
  if ($num > 1)
    return $num * fatorial($num - 1);
  return 1;
}

echo "O fatorial de 1 é " . fatorial(1) . "\n";
echo "Fatorial de 5 é " . fatorial(5) . "\n";
?>

<?php
function calcularFatorial($num)
{
  if ($num <= 1) {
    return 1;
  } else {
    $fatorial = 1;
    for ($i = 2; $i <= $num; $i++) {
      $fatorial *= $i;
    }
    return $fatorial;
  }
}

echo "O fatorial de 1 é " . calcularFatorial(1) . "\n";
echo "O fatorial de 5 é " . calcularFatorial(5) . "\n";
?>

<?php
function calcSomaMedia(...$valores)
{
  $soma = array_sum($valores);
  $media = count($valores) > 0 ? $soma / count($valores) : 0;
  return ['soma' => $soma, 'media' => $media];
}

$resultado = calcSomaMedia(10, 20, 30, 40, 50);
echo "Soma: " . $resultado['soma'] . "\n";
echo "Média: " . $resultado['media'];
?>