<?php

/**
 * 基本的に、大文字と小文字はしっかり使い分ける
 * 定数はもちろん大文字
 */

define("CONSTANT", "Hello world.");
echo CONSTANT; // "Hello world." を出力
echo Constant; // "Constant" を出力し、警告が発生

define("GREETING", "Hello you.", true);
echo GREETING; // "Hello you." を出力
echo Greeting; // "Hello you." を出力

// PHP 7 以降で動作
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // "cat" を出力
