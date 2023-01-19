<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Constantes e constantes mágicas');

/** [ constantes ] https://php.net/manual/pt_BR/language.constants.php */
_line('constantes', __LINE__);

define('HELLO', 'world');
const EMAIL = 'mail@mail.com';

echo '<p>Email: ', EMAIL, ' - Hello ', HELLO, '</p>';

class Config
{
    const USER = 'root';
    const HOST = 'localhost';
}

echo '<p>', Config::HOST, '</p>';
echo '<p>', Config::USER, '</p>';

var_dump(get_defined_constants(true)['user']);

/** [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php */
_line('constantes mágicas', __LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);

function stackPHP()
{
    return __FUNCTION__;
}

var_dump(stackPHP());

trait MyTrait
{
    public $traitName = __TRAIT__;
}

class StackPHP
{
    use MyTrait;
    public $className = __CLASS__;
}

var_dump(new StackPHP(), StackPHP::class);
