<?php

$path = "sec13";

$result = scandir($path);

var_dump($result);
foreach($result as $dir) {
  if($dir != "." && $dir != "..") {
    echo $dir . PHP_EOL;
  } 
}

