<?php

$addFunction = function($a, $b): int {
  $addition = $a + $b;
  return $addition;
};

echo $addFunction(1, 2) . PHP_EOL;

$content = "This is a String message";

$printContent = function() use($content) {
  echo $content . PHP_EOL;
};

$printContent();