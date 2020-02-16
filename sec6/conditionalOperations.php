<?php

/* $flag = (true) ? "Correct" : "Wrong"; */

$is_active = null;

// for php5
// $flag2 = $is_active ?? "flag is true" : "flag is false";

// for php7~
$flag2 = $is_active ?? 1;

echo "$flag2";
