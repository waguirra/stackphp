<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Estruturas de controle');

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
_line('if, elseif, else', __LINE__);

$role = 5;

if ($role > 5) {
    var_dump('Administrador');
} elseif ($role < 5) {
    var_dump('Inscrito');
} else {
    var_dump('Colaborador');
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
_line('isset, empty, !', __LINE__);

$hello = '';

if (isset($hello)) {
    var_dump('Olá Mundo');
} else {
    var_dump('');
}

if (!empty($hello)) {
    var_dump('Variavel vazia');
} else {
    var_dump('Variavel não está vazia');
}

/** [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php */
_line('switch', __LINE__);

$veiculo = 'pesado';

switch ($veiculo) {
    case 'pesado':
        var_dump('Veiculo pesado');
        break;
    case 'leve':
        var_dump('Veiculo leve');
        break;
    default:
        var_dump('Veiculo comum');
        break;
};



