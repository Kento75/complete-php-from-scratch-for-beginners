<?php

$arr = [1,2,3,4];

var_dump($arr);

print_r($arr);

// do not use echo to print arrays
echo $arr . PHP_EOL;

echo $arr[0] . PHP_EOL;
echo $arr[1] . PHP_EOL;
echo $arr[2] . PHP_EOL;
echo $arr[3] . PHP_EOL;

echo 'Array length: ' . count($arr) . PHP_EOL;

for($count = 0; $count < count($arr); $count++) {
  echo 'result1 : ' . $arr[$count] . PHP_EOL;
  echo "result2 : $arr[$count]" . PHP_EOL;
}

const ARRY_ELEMENT = 1;
echo "{$arr[ARRY_ELEMENT]}" . PHP_EOL;


