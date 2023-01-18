<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Trabalhando com funções');

/** [ functions ] https://php.net/manual/pt_BR/language.functions.php */
_line('functions', __LINE__);

require_once __DIR__ . '/includes/functions.php';

$user1  = user('Usuário 1');
$user2  = user('Usuário 2', 'usuario2@gmail.com');

var_dump($user1, $user2);

/** [ global access ] global $var */
_line('global access', __LINE__);

require_once __DIR__ . '/includes/functions.php';

$street = 'Mundo PHP';
$zipCode = '00000-000';

var_dump(address());

/** [ static arguments ] static $var */
_line('static arguments', __LINE__);

require_once __DIR__ . '/includes/functions.php';

echo totalPrice(100);
echo totalPrice(100);
echo totalPrice(100);

/** [ dinamic arguments ] get_args | num_args */
_line('dinamic arguments', __LINE__);

var_dump(showArgs('Hello', 'World'));
