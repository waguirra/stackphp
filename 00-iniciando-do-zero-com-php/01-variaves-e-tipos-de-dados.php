<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Variáveis e tipos de dados');

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
_line('variáveis', __LINE__);

$name = 'Nome do Usúario';

echo '<p>', $name, '</p>';

$key = 'idade';
$$key = 'Minha Idade';

echo '<p>', $key, '</p>';
echo '<p>', $idade, '</p>';

$keyr = &$key;
$keyr = 'Referencia';

echo '<p>', $key, '</p>';

/** [ tipo boleano ] true | false */
_line('tipo boleano', __LINE__);

$true = true;
$false = false;

var_dump([$true, $false]);

/** [ tipo callback ] call | closure */
_line('tipo callback', __LINE__);

$article = '<article><h1>Um Call User Function</h1></article>';
$articleClean = call_user_func('htmlspecialchars', $article);

var_dump($articleClean);

echo $articleClean;

$callback = function ($string) {
    echo "<p>Hello $string</p>";
};

$callback('World');

/** [ outros tipos ] string | array | objeto | numérico | null */
_line('outros tipos', __LINE__);

$string = 'Olá Mundo!';
$array = [$string];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int = 10;
$float = 10.1;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);
