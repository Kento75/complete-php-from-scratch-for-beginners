<?php
class Files {

  function displayContent($filename) : void {
    if(!file_exists($filename)) {
      echo "$filename does not exists" . PHP_EOL;
    }

    echo file_get_contents($filename) . PHP_EOL;

    $content = file_get_contents($filename);
  }

  function getContent($filename) : string {
    if(!file_exists($filename)) {
      echo "$filename does not exists" . PHP_EOL;
      return "";
    }

    $content = file_get_contents($filename);

    return $content;
  }
}

$file1 = new Files();
$file1->displayContent("Test.txt");
echo "Here is your File Content: " . $file1->getContent('Text.txt');