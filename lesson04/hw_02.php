<?php

// declare(strict_types=1)

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function searchMaxMinAvgNumbers(array $arr): array
{
  $arr2 = [];
  $arr2["max"] = max($arr);
  $arr2["min"] = min($arr);
  $arr2["avg"] = round(array_sum($arr) / count($arr));
  return $arr2;
}

searchMaxMinAvgNumbers($arr);
