<?php

function luasLingkaran($jariJari)
{
    return number_format(3.14 * pow($jariJari, 2), 2, '.', '');
}

function kelilingLingkaran($jariJari)
{
    return number_format(2 * 3.14 * $jariJari, 2, '.', '');
}

function luasPersegi($panjang, $lebar)
{
    return number_format($panjang * $lebar, 2, '.', '');
}

for ($i = 1; $i <= 100; $i++) {
    echo number_format($i, 2, '.', '') . PHP_EOL;

    if ($i % 3 === 0) {
        echo luasLingkaran($i / 3) . PHP_EOL;
    }

    if ($i % 5 === 0) {
        echo kelilingLingkaran($i / 5) . PHP_EOL;
    }

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo luasPersegi($i / 3, $i / 5) . PHP_EOL;
    }
}
