<?php


$a = '2a';
$b = 2;
// echo ($a == $b) ? 'True' : 'false';
// echo ($a === $b) ? 'True' : 'false';

switch($a) {
  case $b:
    echo 'True';
  case 2:
    echo 'True';
    break;
  default:
    echo 'false';
}

echo PHP_EOL;
