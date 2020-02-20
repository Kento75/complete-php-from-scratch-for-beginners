<?php

function add($a, $b): int {
  return $a + $b;
}

$addFunction = "add";
echo "Result: " . $addFunction(1, 3) . PHP_EOL;
