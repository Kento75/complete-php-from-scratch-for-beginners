<?php

$arr = ["mon", "tues", "web", "thurs", "fri", "sat", "sun"];

var_dump($arr);
foreach($arr as $value) {
  echo $value . PHP_EOL;
}

foreach($arr as $key => $value) {
  echo $key . " => " . $value . PHP_EOL;
}

print_r(array_keys($arr));