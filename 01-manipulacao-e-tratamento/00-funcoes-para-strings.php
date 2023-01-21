<?php

require dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Funções para strings');

/** [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php */
_line('strings e multibyte', __LINE__);

$string = 'Olá Mundo!!';

var_dump([
    'string'    => $string,
    'strlen'    => strlen($string),
    'mb_strlen' => mb_strlen($string),
    'substr'    => substr($string, 4),
    'mb_substr' => mb_substr($string, 4),
]);

/** [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php */
_line('conversão de caixa', __LINE__);

$string = 'Olá Mundo!!';

var_dump([
    'strtoupper'    => strtoupper($string),
    'mb_strtoupper' => mb_strtoupper($string),
    'strtolower'    => strtolower($string),
    'mb_strtolower' => mb_strtolower($string),
    'mb_convert_case UPPER' => mb_convert_case($string, MB_CASE_UPPER),
    'mb_convert_case LOWER' => mb_convert_case($string, MB_CASE_LOWER),
    'mb_convert_case TITLE' => mb_convert_case($string, MB_CASE_TITLE)
]);

/** [ substituição ] multibyte and replace */
_line('substituição', __LINE__);

$string = 'Olá internet, eu sou programador, amo codificar';

var_dump([
    'string'     => $string,
    'mb_strlen'  => mb_strlen($string),
    'mb_strpos'  => mb_strpos($string, ', '),
    'mb_strrpos' => mb_strrpos($string, ', '),
    'mb_substr'  => mb_substr($string, 14, 18),
    'mb_strstr'  => mb_strstr($string, ', '),
    'mb_strrchr' => mb_strrchr($string, ', ', true)
]);

echo '<p>', $string, '</p>';
echo '<p>', str_replace('amo', 'meu hobbie é', $string), '</p>';

/** [ parse string ] parse_str | mb_parse_str */
_line('parse string', __LINE__);

$endPoint = 'name=Usuário&email=usuario@mail.com.br';
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint
]);
