<?php
/**
 * Created by PhpStorm.
 * User: Jeremy Reyes B.
 * Date: 2018/07/21
 * Time: 8:56 AM
 */

/**
 * Write a function:
 *
 * function solution(A);
 * that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.
 *
 * For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
 *
 * Given A = [1, 2, 3], the function should return 4.
 *
 * Given A = [−1, −3], the function should return 1.
 *
 * Assume that:
 *
 * N is an integer within the range [1..100,000]
 * Each element of array A is an integer within the range [−1,000,000..1,000,000]
 * Complexity:
 *
 * Expected worst-case time complexity is O(N)
 * Expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments)
 * Elements of input arrays can be modified.
 *
 * Solutions:
 *
 *  function solution(A) {
 *      for (i = 1; i < 1000000; i++) {
 *          if(!A.includes(i)) return i;
 *      }
 *  }
 */

function solution($a) {
    for ($i = 1; $i < 100000; $i++) {
        if (in_array($i, $a)) {
            return $i;
        }
    }
}

echo solution([3,6,4,2]);