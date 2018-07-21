<?php
/**
 * Created by PhpStorm.
 * User: Jeremy Reyes B.
 * Date: 2018/07/21
 * Time: 9:44 AM
 */

function solution1($A) {

    if (!$A || !count($A)) {
        return 0;
    }

    $A = array_unique($A);
    $C = '';
    $E = 0;
    $cnt = 0;

    foreach ($A as $k => $number) {

        if (is_int($number) && $number >= 1 && $number <= 100000) {

            $C .= (string) $number;

            for ($i = $number; $i >= 1; $i--) {

                $pos = strpos($C, (string)$i);

                if ($pos !== false) {
                    $cnt++;
                }
            }

            if ($cnt === $number) {
                $E++;
            }

            $cnt = 0;
        }
    }

    return $E;
}


function solution2($N) {

    return max(str_split((string)calculate($N)));
}

function calculate($N) {

    if (!$N || $N <= 0) {
        return 0;
    }
    elseif($N > 0 && $N <= 1000000000){
        return calculate($N-1) + $N;
    }
}


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