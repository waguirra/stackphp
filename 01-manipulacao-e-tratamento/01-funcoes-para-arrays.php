<?php

require dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Funções para arrays');

/** [ criação ] https://php.net/manual/pt_BR/ref.array.php */
_line('manipulação', __LINE__);

$index = [
    'laranja',
    'maça',
    'pera'
];

$assoc = [
    'fruta_1' => 'laranja',
    'fruta_2' => 'maça',
    'fruta_3' => 'pera'
];

array_unshift($index, 'manga', 'morango');

$assoc = ['fruta_4' => 'manga', 'fruta_5' => 'morango'] + $assoc;

array_push($index, '');

$assoc = $assoc + ['fruta_6' => ''];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump($index, $assoc);

/** [ ordenação ] reverse | asort | ksort | sort */
_line('ordenação', __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
ksort($assoc);

krsort($index);
krsort($assoc);

sort($index);

var_dump($index, $assoc);

/** [ verificação ]  keys | values | in | explode */
_line('verificação', __LINE__);

var_dump(array_keys($assoc), array_values($assoc));

$string = implode(', ', $assoc);

if (in_array('laranja', $assoc)) {
<<<<<<< HEAD
    echo "<p>{$string}</p>";
=======
    echo '<p>{$string}</p>';
>>>>>>> c7591fc90eadb111b134a6b5131a9a0f9e18c456
}
