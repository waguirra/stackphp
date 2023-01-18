<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Estruturas de repetição');

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
_line("while, do while", __LINE__);

$loop = 1;
$while = [];

while ($loop <= 5) {
    $while[] = $loop;
    $loop++;
}

var_dump($while);

$loop = 5;
$while = [];

do {
    $while[] = $loop;
    $loop--;
} while ($loop >= 1);

var_dump($while);

/** [ for ] https://php.net/manual/pt_BR/control-structures.for.php */
_line("for", __LINE__);

for ($i = 1; $i <= 10; $i++) {
    echo "<p>{$i}</p>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
_line("break, continue", __LINE__);

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        continue;
    }

    if ($i >= 10) {
        break;
    }

    echo "<p>Pulou + 2 :: {$i}</p>";
}

/** [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php */
_line("foreach", __LINE__);

$array = [];

for ($i = 0; $i <= 2; $i++) {
    $array[] = $i;
}

var_dump($array);

foreach ($array as $item) {
    var_dump($item);
}

foreach ($array as $key => $value) {
    var_dump("{$key} = {$value}");
}
