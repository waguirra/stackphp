<?php
/**
 * Document content e charset
 */
header("Content-Type: text/html; charset=utf-8");

/**
 * Style, Icon e Logo
 */
echo <<<EOL
    <link rel='stylesheet' href='../stackphp/stackphp.css'/>
    <link rel='icon' href='../stackphp/logo_php.svg'/>
    <img class='brand' src='../stackphp/logo_php8.png'/>
EOL;

/**
 * Cria o título do arquivo para o browser
 */
function _title($title)
{
    echo "<title>{$title} | Stack PHP</title>";
}

/**
 * Cria uma linha de sessão para exemplos
 */
function _line(string $name, int $line = __LINE__)
{
    $line = ($line ? " <span class='line-session'>| Linha {$line}</span>" : "");
    $name = ($name ? "[ {$name}{$line} ]" : "");
    echo "<div class='code line'>{$name}</div>";
}
