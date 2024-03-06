<?php

//$a = 1234;
//$b = '1234';

//if ($a === $b) {
//    echo "Compatible types";
//} else {
//    echo "Incompatible types";
//}

$will_raining = TRUE;
$is_cold = FALSE;

if ($will_raining and $is_cold) {
    echo "Não vou sair de casa";
}

if ($will_raining xor $is_cold) {
    echo "Vou pensar duas vezes";
}
