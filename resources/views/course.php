<?php
declare(strict_types=1);
# Scalar types

# bool - true / false
$completed = true;

# int -1, 2, 3, 0, -5 (no decimal)
$score = 75;

#float 1.5, 0.1, 0.005, -15.5
$price = 0.99;

#string - "Marco"
$greeting = "Hello Marco";

echo $completed . '<br>';
echo $score . '<br>';
echo $price . '<br>';
echo $greeting . '<br>';

# Compound Types
# Array
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
print_r($companies);

# Object
# Callable
# Iterable

# Special types
# resource
# null

function sum(float $x, float $y)
{
    return $x + $y;
}

// $sum = sum(2, '3');
$sum = sum(2.5, 3.4);

echo $sum . '<br>';

var_dump($sum);

$x = (int) '5';
var_dump($x);
