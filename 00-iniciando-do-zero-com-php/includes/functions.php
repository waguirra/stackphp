<?php

function user($name, $email = null)
{
    return [
        'Nome'  => $name,
        'Email' => $email
    ];
}

function address()
{
    global $street;
    global $zipCode;

    return [
        'Rua' => $street,
        'CEP' => $zipCode
    ];
}

function totalPrice($price)
{
    static $total;

    $total += $price;

    return '<p>' . number_format($total, 2, ',', '.') . '</p>';
}

function showArgs()
{
    $args  = func_get_args();
    $count = func_num_args();

    return [
        'args'  => $args,
        'count' => $count
    ];
}
