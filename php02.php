<?php

$a = 17;
$b = 5;

echo $a . " + " . $b . " = " . ($a + $b) . "<br>";
echo $a . " - " . $b . " = " . ($a - $b) . "<br>";
echo $a . " * " . $b . " = " . ($a * $b) . "<br>";
echo $a . " / " . $b . " = " . ($a / $b) . "<br>";
echo $a . " % " . $b . " = " . ($a % $b) . "<br>";

$mm = 1234;
$cm = $mm / 10;
$m = $mm / 1000;

echo $mm . " mm on " . number_format($cm, 2, '.', '') . " cm.<br>";
echo $mm . " mm on " . number_format($m, 2, '.', '') . " m.<br>";

$a = 3;
$b = 4;
$c = sqrt($a * $a + $b * $b);

$ymbermoot = $a + $b + $c;
$pindala = ($a * $b) / 2;

echo "Täisnurkse kolmnurga ümbermõõt on " . round($ymbermoot) . ".<br>";
echo "Täisnurkse kolmnurga pindala on " . round($pindala) . ".<br>";
?>