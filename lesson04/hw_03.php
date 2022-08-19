<?php

$box = [
  [
    0 => 'Тетрадь',
    1 => 'Книга',
    2 => 'Настольная игра',
    3 => [
      'Настольная игра',
      'Настольная игра',
    ],
    4 => [
      [
        'Ноутбук',
        'Зарядное устройство'
      ],
      [
        'Компьютерная мышь',
        'Набор проводов',
        [
          'Фотография',
          'Картина'
        ]
      ],
      [
        'Инструкция',
        [
          'Ключ'
        ]
      ]
    ]
  ],
  [
    0 => 'Пакет кошачьего корма',
    1 => [
      'Музыкальный плеер',
      'Книга'
    ]
  ]
];

$lookingItem = 'Ключ';

function foo($item, $arr)
{
  foreach ($arr as $value) {
    if (is_array($value)) {
      if (foo($item, $value)) {
        return true;
      }
    } elseif ($item ===  $value) {
      return true;
    }
  }
  return false;
}

foo($lookingItem, $box);
