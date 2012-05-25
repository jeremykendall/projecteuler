<?php

// Find the sum of all the multiples of 3 or 5 below 1000
// projecteuler.net/problem=1

$limit = 1000;

$answer = sumMultiples(3, $limit) + sumMultiples(5, $limit) - sumMultiples(15, $limit);
//$answer = sumMultiples(7, $limit);
echo $answer . PHP_EOL;

/**
 * Finds sum of $multiple up to $limit
 *
 * @var $multiple int
 * @var $limit int
 * 
 * @return sum int
 */
function sumMultiples($multiple, $limit)
{
    $n = (int) (($limit - 1) / $multiple);
    return $n * (int) (($n + 1) / 2) * $multiple;
}
