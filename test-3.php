<?php

function solution($A) {

    $response = 0;

    for ($i = 0; $i < count($A); $i++) {

        $response += ($A[$i]);
    }

    return $response;
}

echo solution([
    0 => 1,
    1 => 3,
    2 => -3
]);