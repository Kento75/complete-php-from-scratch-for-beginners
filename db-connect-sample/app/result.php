<?php

try {
  $db = getDb();
  $db->exec("SELECT * FROM member");

  $stt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stt as $row) {
    print "$row" . PHP_EOL;
  }

} catch (PDOException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}