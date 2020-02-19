<?php

$content = 'You can do string operations easily with String functions';
$findWord = 'operations';
$position = false;

echo "$content" . PHP_EOL;
echo 'Number of words in the String: ' . str_word_count($content) . PHP_EOL;
echo str_replace("operations", "hogehoge", $content) . PHP_EOL;