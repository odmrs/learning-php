<?php

function imc(float $weight, float $height)
{
    return $weight / ($height * $height);
}
