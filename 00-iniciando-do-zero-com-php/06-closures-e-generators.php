<?php

require_once dirname(__DIR__) . '/stackphp/stackphp.php';

_title('Closures e generators');

/** [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php */
_line('closures', __LINE__);

$myAge = function (int $year) {
    $age = date('Y') - $year;
    return $age;
};

echo "Minha idade é {$myAge(2000)} anos";

/** [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php */
_line('generators', __LINE__);

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date('d-m-Y', strtotime("+{$day}days"));
    }
}

foreach (generatorDate(400000) as $date) {
    echo "<p>{$date}</p>";
}
