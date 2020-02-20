<?php

function divide($x, $y): int {
  if($y <= 0) {
    throw new Exception("Divide By Zero Exception might happen");
  }

  $result = $x / $y;

  return $result;
}

try {

  $result = divide(1, 0);

} catch(Exception $e) {

  echo "Caught Exception : " . $e ->getMessage() . PHP_EOL;

} finally {
  echo "Finally" . PHP_EOL;
}
