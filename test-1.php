<?php

function solution($A) {

    if (!$A || !count($A)) {
        return 0;
    }

    $a = array_unique($A);
    $s = [];
    $cnt = 0;

    foreach ($a as $k => $number) {

        if (is_int($number) && $number >= 1 && $number <= pow(10, 5)) {

          $s[] = $number;

          sort($s);

          if ($s[$number - 1] == $number) {
              $cnt++;
          }
        }
    }

    return $cnt;
}

echo solution([2,1,3,5,4]);


?>