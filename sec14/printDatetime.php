<?php

echo "Current Date: " . date('YMD') . PHP_EOL;
echo "Current Date: " . date('y-m-d') . PHP_EOL;
echo "Current Date: " . date('D-M-Y H:i:s:A') . PHP_EOL;

$time = time() + 1000;
echo "Current Date: " . date("d-m-y h:i:s:a", $time) . PHP_EOL;

echo "Current Date: " . date("Y/m/d h:m:s", $time) . PHP_EOL;
