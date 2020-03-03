<?php

require_once '../db/DbManager.php';

try {
  $db = getDb();
  $db->exec("INSERT INTO member (name, sec, old, content, memo) VALUES ('ほげほげ', '男', 18, '2018-02-02', '')");

  print "直近のID値：{$db->lastInsertId()}";
} catch (PDOException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}