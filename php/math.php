<?php

/**
 * Finds sum of $multiple up to $limit
 *
 * @var int $multiple
 * @var int $limit
 * 
 * @return int sum
 */
function sumMultiples($multiple, $limit)
{
    $n = (int) (($limit - 1) / $multiple);
    $m = (int) $n * ($n + 1) / 2;
    return $m * $multiple;
}

/**
 * Find the next element after $current in the fibonacci sequence
 *
 * @var int $current
 * @return float Next in fibonacci sequence
 */
function nextFibonacci($current)
{
    $sq5 = sqrt(5);
    $Phi = (1 + $sq5) / 2;
    return round(pow($Phi, $current) / $sq5);
}

/**
 * Returns fibonacci sequence from 1 to $limit as an array
 *
 * @var int $limit
 * @return array fibonacci sequence from 1 to limit
 */
function fibonacci($limit = 100)
{
    $fibonacci = array(1, 2);
    
    for($i = 1; $fibonacci[$i] < $limit; $i++) {
        $fibonacci[$i+1] = $fibonacci[$i - 1] + $fibonacci[$i];
    }

    return $fibonacci;
}
