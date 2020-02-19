<?php

$arr = [4,8,4,5,6];

print_r($arr);
// asc sort
sort($arr);
print_r($arr);
// desc sort
rsort($arr);
print_r($arr);

$map = ["3" => "hoge", "1" => "fafa", "4" => "fafadf"];

// asc sort for key
ksort($map);
print_r($map);

// desc sort for key
krsort($map);
print_r($map);