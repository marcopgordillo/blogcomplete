<?php
declare(strict_types=1);

function print_array(array $array_to_print) {
    echo '<pre>';
    print_r($array_to_print);
    echo '</pre>';

    echo count($array_to_print);
}

/* OPERATORS */

// Aritmetic Operators
$x = +'10';
$x = 10;
$y = 2;

var_dump($x - $y);
var_dump($x / $y);
var_dump(fdiv($x, $y));
var_dump($x % $y);
var_dump(fmod($x, $y));

// Assignments Operators
$x = 5;
