<?php

function custom_exception_handler($exception) {
  echo 'Caught Exception : ' . $exception ->getMessage() . PHP_EOL;
}

set_exception_handler("custom_exception_handler");

throw new Exception("Exception is raised!");