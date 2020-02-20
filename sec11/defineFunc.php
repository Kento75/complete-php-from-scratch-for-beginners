<?php

function printEventNumbers($limit) {
  for($index = 0; $index <= $limit; $index++) {
    if($index%2 == 0) {
      echo "Even Number: $index" . PHP_EOL;
    }
  }
}

printEventNumbers(20);
printEventNumbers("20");


function add($a, $b) {
  return $a + $b;
}

echo add(10, 20);