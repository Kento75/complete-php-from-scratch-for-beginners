<?php

$students = "John, Parker, Amit, Jacob, Jim";
$studentArr = explode(",", $students);
print_r($studentArr);

$studentList = implode(",", $studentArr);
echo $studentList . PHP_EOL;
