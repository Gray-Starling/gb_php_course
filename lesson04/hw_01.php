<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$isNumberInArrayEven = function ($value) {
  return ($value % 2 === 0) ? "Число {$value} четное \n" : "Число {$value} не четное \n";
};

$res = array_map($isNumberInArrayEven, $arr);

print_r($res);
