<?php

$nimi = "Anri";
$kuupaev = 07.04;

$a = 17;
$b = 5;

echo $a . " + " . $b . " = " . ($a + $b) . PHP_EOL;
echo $a . " - " . $b . " = " . ($a - $b) . PHP_EOL;
echo $a . " * " . $b . " = " . ($a * $b) . PHP_EOL;
echo $a . " / " . $b . " = " . ($a / $b) . PHP_EOL;
echo $a . " % " . $b . " = " . ($a % $b) . PHP_EOL;

$mm = 1234;
$cm = $mm / 10;
$m  = $mm / 1000;

echo $mm . " mm on " . number_format($cm, 2, '.', '') . " cm." . PHP_EOL;
echo $mm . " mm on " . number_format($m, 2, '.', '') . " m." . PHP_EOL;

$a = 3;
$b = 4;
$c = sqrt($a * $a + $b * $b);

$ymbermoot = $a + $b + $c;
$pindala = ($a * $b) / 2;

echo "Täisnurkse kolmnurga ümbermõõt on " . round($ymbermoot) . "." . PHP_EOL;
echo "Täisnurkse kolmnurga pindala on " . round($pindala) . "." . PHP_EOL;
?>