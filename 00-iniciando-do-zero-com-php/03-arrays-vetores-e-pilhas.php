<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title("Arrays, vetores e pilhas");

/** [ arrays ] https://php.net/manual/pt_BR/language.types.array.php */
_line("index array", __LINE__);

$arr = array(1, 2, 3);
// ou
$arr = [1, 2, 3];

var_dump($arr);

$arr[] = 4;

var_dump($arr);

/** [ associative array ] "key" => "value" */
_line("associative array", __LINE__);

$user = [
    'name' => 'Meu nome'
];

$user['age'] = 'Minha idade';

var_dump($user);

/** [ multidimensional array ] "key" => ["key" => "value"] */
_line("multidimensional array", __LINE__);

$user1 = [ 'name' => 'Usuário 1' ];
$user2 = [ 'name' => 'Usuário 2' ];

$users = [
    $user1,
    $user2
];

var_dump($users);

/** [ array access ] foreach(array as item) || foreach(array as key => value) */
_line("array access", __LINE__);

echo "<p>{$users[0]['name']}</p>";

foreach ( $user2 as $item) {
    echo "<p>{$item}</p>";
}

foreach ( $user1 as $key => $item) {
    echo "<p>{$key}: {$item}</p>";
}
