<?php

/* integer */

$marks = 87;
echo $marks . PHP_EOL;

// 数値と解釈される（まぁ、わかる）
$total = "1000" + $marks;
echo $total . PHP_EOL;

// 数値と解釈される（えぇ...）
$total2 = "1000px" + $marks;
echo $total2 . PHP_EOL;

echo PHP_EOL .PHP_EOL;

/* double */

$totalScore = 78.87;
echo $totalScore .PHP_EOL;

$temparature = -40.23;
echo $temparature . PHP_EOL;

// 丸める
$price = 4.99;
echo round($price) . PHP_EOL;

// 0.1 = 1.87 ~ 1.97 ????
$price = 1.87;
$bid = 1.97;
// absは絶対値を取得
/**
 * -5なら 5
 * 10なら 10
 * 1.34なら 1.34
 */
echo (abs($price - $bid) < 0.1) ? "Accepting" : "Rejected";
