<?php

// zero division error
@$value = 1 / 0;

echo "After : " . $php_errormsg . PHP_EOL;
