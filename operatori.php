<?php
//3 tipi di operatori
//1) matematico
//2) confronto
//3) logico
$x = 1;
$y = 10;
//1)
echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;//Modulo resto

$a = true;
$b = false;
//$b = 'true';
//2)

$a == $b; // Confronta solo i valori
$a === $b; // Confronta i valori e il tipo

$a > $b;
$a >= $b;

$a < $b;
$a <= $b;

$a <> $b;
$a != $b;
$a !== $b;

//3)Operatori logici

$a and $b;
$a && $b;

$a or $b;
$a || $b;

!$a;
!$b;

