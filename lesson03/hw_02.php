<?php

$wishes = ["счастья", "здоровья", "воображения", "терпения", "благополучия", "уюта", "тепла", "смеха", "процветания", "достатка",];
$epithets = ["бесконечного", "крепкого", "большого", "безудержного", "космического", "вечного", "не скончаемого", "великого",];
$numberOfWishes = 3;

for ($i = 0; $i < $numberOfWishes; $i++) {
  $randomWishesIndex = array_rand($wishes, 1);
  $randomEpithetsIndex = array_rand($epithets, 1);
  $wishList[] = "{$epithets[$randomEpithetsIndex]} {$wishes[$randomWishesIndex]}";
  unset($wishes[$randomWishesIndex]);
  unset($epithets[$randomEpithetsIndex]);
}

// В случае изменения $numberOfWishes последнее сообщение всегда будет с "и"
foreach ($wishList as $key => $value) {
  if ($key === count($wishList) - 1) {
    $lastWish = $value;
    unset($wishList[$key]);
  }
}

$concatenatedString = implode(", ", $wishList);
$finalWishList = "{$concatenatedString} и $lastWish";

$userName = readline("Как зовут имениника? ");

$template = "Дорогой {$userName}, от всего сердца поздравляю тебя с днем рождения, желаю {$finalWishList}!";

echo ($template);
