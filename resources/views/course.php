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
var_dump($x * $y);
var_dump($x ** $y);
var_dump($x / $y);
var_dump(fdiv($x, $y));
var_dump($x % $y);
var_dump(fmod($x, $y));

// Assignments Operators
$x = 5;

// Comparison Operators
$x = 11;
$y = 10;

var_dump($x <=> $y);

var_dump(0 == 'hello');
var_dump(0 == '0');

$x = 'Hello World';
$y = strpos($x, 'H');

// if ($y === false) {
    // echo 'H Not Found';
// } else {
    // echo 'H Found at index ' . $y;
// }
echo '<br>';
var_dump($y);

$result = $y === false ? 'H Not Found' : 'H Found at index ' . $y;
echo $result;

echo '<br>';

// $z = null;
$y = $z ?? 'hello';

var_dump($y);
