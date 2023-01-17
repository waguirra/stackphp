<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Comandos de saída');

/** [ echo ] https://php.net/manual/pt_BR/function.echo.php */
_line('echo', __LINE__);

echo '<p>Olá Mundo!</p>';
echo '<p>', 'Olá', ' ', 'Mundo!', '</p>';

$hello = 'Olá';
$world = 'Mundo!';

echo "<p>$hello $world</p>";
echo "<p>{$hello} {$world}</p>";
echo '<p>' . $hello . ' ' . $world . '</p>';

?>

<p><?= $hello ?> <?= $world ?></p>

<?php

/** https://php.net/manual/pt_BR/function.print.php */
_line('print', __LINE__);

print $hello;
print $world;

print "<h3>{$hello} {$world}</h3>";

/** https://php.net/manual/pt_BR/function.print-r.php */
_line("print_r", __LINE__);

$arr = [
    'nome' => 'Meu nome',
    'idade'  => 'Minha idade'
];

print_r($arr);

echo '<pre>', print_r($arr, true), '</pre>';

/** https://php.net/manual/pt_BR/function.printf.php */
_line('printf', __LINE__);

$string = '<p>Olá, eu sou um %s, e estou %s</p>';

printf($string, 'estudante', 'aprendendo php');

echo sprintf($string, 'estudante', 'aprendendo php');

/** https://php.net/manual/pt_BR/function.vprintf.php */
_line('vprintf', __LINE__);

vprintf($string, ['estudante', 'aprendendo php']);

echo vsprintf($string, ['estudante', 'aprendendo php']);

/** https://php.net/manual/pt_BR/function.var-dump.php */
_line('var_dump', __LINE__);

var_dump($string, $arr);
