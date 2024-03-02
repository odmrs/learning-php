<?php

declare(strict_types=1);

function calculate_imc(float $weight, float $height): float
{
    var_dump($weight, $height);
    return $weight / ($height * $height);
}

var_dump(calculate_imc(75.1, 1.85));
var_dump(calculate_imc('75.1', 2)); // Because I use strict_types = 1
