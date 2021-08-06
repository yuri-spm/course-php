<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA =5;
$operadors = [
    "a+=5" =>($operadorA += 5),
    "a-=5" =>($operadorA -= 5),
    "a *= 5" => ($operadorA *= 5),
    "a/=5" =>($operadorA /= 5),

];

var_dump($operadors);

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pos-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pre-incremento" => ++$incrementA,
    "pos-decremento" => $incrementB--,
    "res-decremento" => $incrementB,
    "pre-decremento" => --$incrementB,

];


var_dump($increment);




/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatdA = 5;
$relatdB = "5";
$relatdC = 10;
$related = [
    "a == b" => ($relatdA == $relatdB),
    "a === b" => ($relatdA === $relatdB),
    "a != b" => ($relatdA != $relatdB),
    "a !== b" => ($relatdA !== $relatdB),
    "a > c" => ($relatdA > $relatdC),
    "a < c" => ($relatdA < $relatdC),
    "a >= b" => ($relatdA >= $relatdB),
    "a <= c" => ($relatdA <= $relatdC),
];

var_dump($related);



/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;

$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "! a" => (!$logicA),
    "! b" => (!$logicB),
];
var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 6;
$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

var_dump($calc);

