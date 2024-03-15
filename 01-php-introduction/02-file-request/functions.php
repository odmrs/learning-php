<?php

// Create a function

// function name_of_function($arg1, $arg2, $argN)
// {
//     // Code of function
//     $value = $arg1 + $arg2 + $argN;
//     return $value;
// }

// Create a IMC function

// function calculate_imc(float $weight, float $height)
// {
//     return $weight / ($height * $height);
// }

// echo calculate_imc(75, 1.85) . PHP_EOL;

// Global variables -> Is not a good practice

// $total = 0;

// function km2mi($km)
// {
//     global $total;
//     $total += $km;
//     return $km * 0.6;
// }

// echo 'percorreu ' . km2mi(100) . " milhas\n";
// echo 'percorreu ' . km2mi(200) . " milhas\n";
// echo "Percorreu no total {$total} km/h\n";

// Static variables

// function percorre($km)
// {
//     static $total;
//     $total += $km;
//     echo "Percorreu mais $km do total de {$total}\n";
// }

// percorre(100);
// percorre(200);
// percorre(50);

// Functions by value  -> By default variables are gived by value.

// function add($var, $value)
// {
//     $var += $value;
// }

// $a = 10;

// add($a, 50);

// echo $a . PHP_EOL;

// Function by reference -> Change the original value

// function add_by_reference(&$var, $value)
// {
//     $var += $value;
// }

// $b = 10;

// add_by_reference($b, 90);

// echo $b . PHP_EOL;

// Replacing global variable by reference
// $total = 0;

// function km2mi(&$total, $km)
// {
//     $total += $km;
//     return $km * 0.6;
// }

// echo 'percorreu ' . km2mi($total, 100) . " milhas\n";
// echo 'percorreu ' . km2mi($total, 200) . " milhas\n";
// echo "Percorreu no total {$total} km/h\n";

// Defautl values 

// function increment(&$var, $valor = 40)
// {
//     $var += $valor;
// }

// $a = 10;

// increment($a);

// echo $a . PHP_EOL;

function sum_all_numbers(): int
{
    $p = func_num_args(); // get all positions inside the arguments of function.
    $array_numbers = func_get_args(); // get all arguments inside the arguments of function.
    $total = 0;

    for ($i = 0; $i < $p; $i++) {
        $total += $array_numbers[$i];
    }

    return $total;
}

echo sum_all_numbers(5, 5, 5, 5, 5) . PHP_EOL;
echo "Something blablabla $sum_all_numbers(5,5,5,5,5)" . PHP_EOL; 
