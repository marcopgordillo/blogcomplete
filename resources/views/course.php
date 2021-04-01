<?php
declare(strict_types=1);

function print_array(array $array_to_print) {
    echo '<pre>';
    print_r($array_to_print);
    echo '</pre>';

    echo count($array_to_print);
}

/* ARRAYS */
$programmingLanguages = ['PHP', 'Java', 'Python'];

print_array($programmingLanguages);

array_push($programmingLanguages, 'C', 'JavaScript');
$programmingLanguages[] = 'C++';

print_array($programmingLanguages);

$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9',
];

print_array($programmingLanguages);

$newLanguage = 'go';

$programmingLanguages[$newLanguage] = '1.15';

print_array($programmingLanguages);

$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];

print_array($array);

echo $array[null];

echo array_pop($array);
print_array($array);

$array = ['a', 'b', 50 => 'c', 'd', 'e'];

print_array($array);

echo array_shift($array);
print_array($array);

// unset($array);
unset($array[50]);
print_array($array);

$x = 5;

$array = (array) $x; //cast

print_array($array);

$array = ['a' => 1, 'b' => null];

var_dump(array_key_exists('a', $array));
var_dump(isset($array['a']));

var_dump(array_key_exists('b', $array));
var_dump(isset($array['b']));

print_array($array);

