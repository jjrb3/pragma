<?php

function solution($A) {

    $p = 0;
    $q = 0;

    for ($i = 0; $i < count($A); $i++) {

        if ($A[$i] >= pow(10,9) * -1 && $A[$i] <= pow(10,9)) {
            $p = max($A[$i] - $i, $p);
            $q = max($A[$i] + $i, $q);
        }
    }


    return $p + $q;
}

echo solution([1,3,-3]);
?>