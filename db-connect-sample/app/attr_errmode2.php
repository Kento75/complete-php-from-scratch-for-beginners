<?php

require_once '../db/DbManager.php';

try {
  $db = getDb();
  // 意図的にエラーを起こす
  $db->exec('hogehogheogheohgeo');
} catch(PDOException $e) {
  print "エラーコード：{$e->getCode()}<br/>";
  print "エラーコード：{$e->getMessage()}<br/>";
}