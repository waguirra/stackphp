<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title("Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
_line("atribuição", __LINE__);

$operadorA = 5;
$operadores = [
    'a += 5' => ($operadorA += 5),
    'a -= 5' => ($operadorA -= 5),
    'a *= 5' => ($operadorA *= 5),
    'a /= 5' => ($operadorA /= 5),
    'a .= 5' => ($operadorA .= 5)
];

var_dump($operadores);

$incrementA = 10;
$incrementB = 10;

var_dump([
    '$incrementA++' => $incrementA++,
    '$incrementA'   => $incrementA,
    '++$incrementA' => ++$incrementA,
    '$incrementB--' => $incrementB--,
    '$incrementB'   => $incrementB,
    '--$incrementB' => --$incrementB,
]);

/** [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php */
_line("comparação", __LINE__);

$relatedA = 5;
$relatedB = '5';
$relatedC = 10;

var_dump([
    'a == b'  => ($relatedA == $relatedB),
    'a === b' => ($relatedA === $relatedB),
    'a != b'  => ($relatedA != $relatedB),
    'a !== b' => ($relatedA !== $relatedB),
    'a > c'   => ($relatedA > $relatedC),
    'a < c'   => ($relatedA < $relatedC),
    'a >= b'  => ($relatedA >= $relatedC),
    'a <= b'  => ($relatedA <= $relatedC),
]);

/** [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php */
_line("lógicos", __LINE__);

$logicA = true;
$logicB = false;

var_dump([
    'a && b' => ($logicA && $logicB),
    'a || b' => ($logicA || $logicB),
    'a'      => ($logicA),
    '! a'    => (!$logicA),
    '! b'    => (!$logicB),
]);

/** [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php */
_line("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;

var_dump([
    'a + b' => ($calcA + $calcB),
    'a - b' => ($calcA - $calcB),
    'a * b' => ($calcA * $calcB),
    'a / b' => ($calcA / $calcB),
    'a % b' => ($calcA % $calcB)
]);
