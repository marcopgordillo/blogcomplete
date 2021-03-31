<?php


$firstName = 'Marco'; // Variable

$firstName = 'Juan';

// Constants
define('STATUS_PAID', 'paid');
const STATUS_OTHER = 'other';

$paid = 'PAIDB';
define('STATUS_' . $paid, 'PAID');
echo STATUS_PAIDB;
echo PHP_VERSION;
echo __LINE__;

// Variable Variables
$foo = 'bar';

$$foo = 'baz';

echo "$foo, $bar, ${$foo}";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <h1>
        <?php echo 'Hello World' ?>
    </h1>
    <h2>
        <?= 'Hello World' ?>
    </h2>
    <p>
        <?= STATUS_PAID ?>
    </p>
</body>
</html>
