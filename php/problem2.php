<?php

require 'math.php';

/**
 * From http://projecteuler.net/problem=2
 * 
 * By considering the terms in the Fibonacci sequence whose values do not 
 * exceed four million, find the sum of the even-valued terms.
 */

$evenTerms = array();
$term = 0;

for($i = 1; $term <= 4000000; $i++) {
    $term = (int) nextFibonacci($i);
    if (($term % 2) == 0 && $term <= 4000000) {
        $evenTerms[$i] = $term;
    }
}

echo array_sum($evenTerms) . PHP_EOL;
