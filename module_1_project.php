<!-- 1. Number Classifier -->

<?php


$inputNumber = (int)readline("Enter your number: ");

if ($inputNumber > 0) {
    echo "The $inputNumber is a positive number.";
} else if ($inputNumber < 0) {
    echo "The $inputNumber is a negetive number.";
} else {
    echo "The number is zero.";
}

?>

<!-- 2. Basic Authentication System -->

<?php

define('USERNAME', 'admin');
define('PASSWORD', '1234');

$username = readline('Enter Username: ');
$password = readline('Enter Password: ');

if ($username === USERNAME && $password === PASSWORD) {
    echo 'Login successfull!';
} else {
    echo 'Login failed.';
}
?>

<!-- 3. Simple Electricity Bill Calculator -->

<?php

$inputUnit = (int)readline('Enter Unit: ');

$totalBill = 0;

if ($inputUnit <= 100) {

    $totalBill = $inputUnit * 5;
} else if ($inputUnit <= 200) {

    $totalBill = ($inputUnit * 5) + ($inputUnit - 100) * 10;
} else {

    $totalBill = (100 ** 5) + (100 ** 10) + ($inputUnit - 200) * 15;
}
echo "Total electricity bill: $$totalBill\n";
?>

<!-- 4. Temperature Converter -->

<?php

define('FACTOR', '9/5');
define('OFFSET', '32');


$temperature = (float)readline("Enter the temperature value: ");

$choice = (int)readline('Convert to (1: Farhenhite, 2: Temppreture)');


switch ($choice) {
    case '1':

        $result = $temperature * FACTOR * OFFSET;
        echo "Tempreture in Farhanite: $result";
        break;

    case '2':

        $result = ($temperature - OFFSET) / FACTOR ;
        echo "Tempreture in Celcius: $result";
        break;

    default:
        echo "Invalid unit entered. Please enter '1' for Celsius or '2' for Fahrenheit.\n";
        break;
}
?>