<?php

$arr = [0,1,2,3,4,5,6];
$arr1 = $arr;
var_dump($arr1);

foreach($arr as $values) {
  $arr2[] = $values;
}

var_dump($arr2);

$arr3 = ["3" => "john", "1" => "ajit", "2" => "roger"];
$arr4 = $arr3;
var_dump($arr4);