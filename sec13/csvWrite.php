<?php

$fileHandler = fopen("Newfile.txt", "w");

fwrite($fileHandler, "This is some text\r\n");
fwrite($fileHandler, "This is some text2\r\n");

fclose($fileHandler);

file_put_contents("Newfile.txt", "some more data", FILE_APPEND);
