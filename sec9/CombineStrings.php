<?php

$firstName = 'John';
$lastName = ', Smith';

$fullName = $firstName . $lastName;
echo $fullName . PHP_EOL;

$Marks = 100;
$passed = true;

$content = "Student $fullName got Total " . $Marks . " he is passed - " . $passed;
echo $content . PHP_EOL;
