<?php

$firstNumber  =  [2, 4, 3, 6, 14, 1, 7, 11, 96, 32, 3, 100];
$secondNumber = [55, 4, 7, 0, 19, 3, 4, 3, 6, 14, 5, 1];

// Через foreach
foreach ($firstNumber as $key => $first) {
  $resultArr[] = $first * $secondNumber[$key];
}
print_r($resultArr);

/** 
 * Через for
 * 
 * for ($i = 0, $j = 0; $i < count($firstNumber); $i++, $j++) {
 * $resultArr[] = $firstNumber[$i] * $secondNumber[$j];
 * }
 * print_r($resultArr); 
 */
