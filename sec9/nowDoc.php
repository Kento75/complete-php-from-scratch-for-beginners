<?php

$name = "John, Smith";
$number = 10;

// 内部の変数は展開されない

echo <<< 'DOC_LABEL'
Your can write anything inside this
"Double Quotes" . anything
'Single Quotes' .........
$name know how to write php
($number * 10)
New Lines and Strings.
DOC_LABEL;
