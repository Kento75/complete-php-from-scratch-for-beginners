<?php

// タイプヒントの有効化
declare(strict_types=1);

function printOddNumbers(int $limit, $skipNumber) {
  for($index = 0; $index <= $limit; $index++) {
    if($index === $skipNumber) {
      continue;
    }
    if($index % 2 != 0) {
      echo "Odd Number: $index" . PHP_EOL;
    }
  }
}

printOddNumbers(20, "3");

// こっちはエラーになる
printOddNumbers("20", "3");