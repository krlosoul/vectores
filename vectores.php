<?php

    $array = [];

    array_push($array, mt_rand(1, 1000));

    $i = 1;
    while ($i < 100) {
        $valor = mt_rand(1, 1000);
        if (in_array($valor, $array)) {
            continue;
        } else {
            array_push($array, $valor);
            $i++;
        }
    }
    arsort($array);

    print_r($array);

?>