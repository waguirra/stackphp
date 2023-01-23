<?php

require dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Manipulação de objetos');

/** [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php */
_line('manipulação', __LINE__);

$arrUser = [
    'name' => 'Usuário 1',
    'mail' => 'usuario@mail.com.br'
];

$objUser = (object) $arrUser;

var_dump($arrUser, $objUser);

echo "<p>E-mail: {$objUser->mail}</p>";

$objAddress = new StdClass();
$objAddress->street = 'Rua 1';
$objAddress->number = 443;
$objAddress->zipcode = '0000000';

var_dump($objAddress);

/** [ análise ] class | objetcs | instances */
_line('análise', __LINE__);

$exception = new PDOException();

var_dump([
    'class'    => get_class($exception),
    'methods'  => get_class_methods($exception),
    'vars'     => get_object_vars($exception),
    'parent'   => get_parent_class($exception),
    'subclass' => is_subclass_of($exception, 'Exception')
]);
