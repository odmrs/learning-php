<?php
// Commenters;
# Others commenters;
/* 
    dwakodka
    d
    awd
    ad
    aw
    d
*/

// Output
// echo 'Hello' . '<br>' . PHP_EOL;
// echo 'World' . '<br>' . PHP_EOL;

// print 'ABC' . '<br>' . PHP_EOL;

// $vector = array('Marcos', 'Gol', 'Fiesta', 'Corsa');

// var_dump($vector);  // Informations with details about a variable


// Variables start with '$'

// $first_name = 'Marcos';
// $second_name = 'Vinicius';

// echo "$first_name $second_name" . PHP_EOL;

// $variable = 'nome';

// $$variable = "Maria";

// echo $nome;

// $a = 5;
// $b = $a;
// $b = 10;

// echo $a . PHP_EOL;
// echo $b;

// Using pointers | Objects are all ways copied by references

// $a = 5;
// $b = &$a;
// $b = 10;

// echo $a;
// echo " ";
// echo $b;

// $a = new stdClass(); // Create a object

// $a->name = "Maria"; // Define a attribute
// $b = $a; // Make a copy
// $b->name = "Joana"; // Replace the attribute
// print $a->name;

// echo ' ';

// print $b->name;

// BOOLEANS

// $show_name = TRUE;

// if ($show_name) {
//     echo 'Marcos' . PHP_EOL;
// }

// $unit = 91;

// $is_over = $unit > 90;

// if ($is_over) {
//     echo 'Is' . PHP_EOL;
// }

// // Empty function

// $var = '';

// if (!empty($var)) {
//     echo 'Have something inside';
// }

// Numeric Types

// $octal = 0123;
// echo $octal . PHP_EOL;

// $hex = 0x1A;
// echo $hex . PHP_EOL;

// $notation = 4e23;
// echo $notation . PHP_EOL;


// Array

// $cars = array('Palio', 'Corsa', 'Gol');

// echo $cars[1] . PHP_EOL;

// $car = new stdClass;

// $car->model = 'Palio';
// $car->year = 2002;
// $car->color = 'Red';

// // print_r($car);
// // var_dump($car);

// print $car->model . ' ';
// print $car->color . ' ';
// print $car->year . ' ';
// print PHP_EOL;

// function calculate_imc(float $weight, float $height)
// {
//     var_dump($weight, $height);
//     return $weight / ($height * $height);
// }

// var_dump(calculate_imc('75.1', 2));

// A error

// var_dump(calculate_imc('75.1x', 2)); // Fatal error

// function calculate_imc(float $weight, float $height): float
// {
//     var_dump($weight, $height);
//     return $weight / ($height * $height);
// }

// var_dump(calculate_imc(75, 1.85));

// Super variables

// $_SERVER -> information about the server, about the browser and more.

// var_dump($_SERVER);

// $_GET -> A Vector with variables about request GET in the URL

// echo 'Information in URL:' . '<br>';
// var_dump($_GET);

// $_POST -> The same about $_GET but with informations about send of data
// $_FILES -> Informations about upload of files
// $_COOKIE -> Informations about cookies 
// $_SESSION -> Array with variables of current session
// $_REQUEST -> Information about $_GET, $_POST and $_COOKIE

// var_dump($_ENV); -> Informations about the where this script is running.
