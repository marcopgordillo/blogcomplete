<?php
declare(strict_types=1);

/* BOOLEANS */

$isComplete = false;

/* FALSYES
 *
 * integers 0 -0 = false
 * floats 0.0 -0.0 = false
 * '' = false
 * [] = false
 * null = false
 *
 * */

if ($isComplete) {
    echo 'success';
} else {
    echo 'fail';
}

/* INTEGERS */

$x = 50; // Decimal
$y = 0x3a; // Hexadecimal
$z = 024; // Octal
$b = 0b1101; // Binary

echo $x, $y, $z, $b;

echo '<br>' . PHP_INT_MAX;
echo '<br>' . PHP_INT_MIN;

$x = 200_000; // readibility
echo '<br>' . $x;

/* FLOATS */

$x = 13_000.5;
echo '<br>' . $x;
echo '<br>' . PHP_FLOAT_MAX;
echo '<br>' . PHP_FLOAT_MIN;

$x = floor((0.1 + 0.7) * 10); // 7.9999999999991118 The presicion
echo '<br>' . $x;
$x = ceil((0.1 + 0.7) * 10); // 7.9999999999991118 The presicion
echo '<br>' . $x;
$x = ceil((0.1 + 0.2) * 10); // 3.000000000000000004 The presicion
echo '<br>' . $x . '<br>';

$x = 0.23;
$y = 1 - 0.77;

var_dump($x, $y);

if ($x == $y) {
    echo 'yes';
} else {
    echo 'no';
}

echo NAN;
echo log(-1);
$x = log(-1);
var_dump($x);
var_dump(is_nan($x));
echo INF;
echo PHP_FLOAT_MAX * 2;

$x = PHP_FLOAT_MAX * 2;
var_dump($x);
var_dump(is_infinite($x));
var_dump(is_finite($x));

echo null;

/* CASTINGS */

echo '<br>';
$x = 5;
$x = 'dsdsdd';
$x = '4.5sds';


var_dump((float) $x);

/* STRINGS */

$firstName = 'Will';
$lastName = 'Smith';

$name = $firstName . ' ' . $lastName;
$name = "Mr. $firstName {$lastName}";

echo '<br>';
echo $name;
echo $name[0];
echo "<br>Letther 2: $name[1]<br>";

$x = 1;
$y = 2;

// Heredoc
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
<br>
TEXT;

echo $text . '<br>';
echo nl2br($text);

// Nowdoc
$text = <<<'TEXT'
Line 1
Line 2
Line 3 ' "
<br>
TEXT;

echo nl2br($text);

$text = <<<TEXT
<div>
    <p>Hello world!</p>
</div>
<br>
TEXT;

echo nl2br($text);

// NULL
$x = null;

echo $x;
var_dump(is_null($x));

$x = 123;
var_dump($x);
unset($x);
// var_dump($x);

