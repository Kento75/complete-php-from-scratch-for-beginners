<?php

class Database {

  public $dbConnection;
  public $records;

  function openConnection() : bool{}

  function fetchRecord($id) : array{}

  function insertRecords($data) : bool {}

  function updateRecords($id, $data) : bool {}

  function deleteRecords($id) : bool {}
}