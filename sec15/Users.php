<?php

class Users {

  function fetchUser($id) : bool {
    // $db = new Database();
    // $db->selectQuery($id, $tableName);
    $result = false;
    echo "Query the Database: " . PHP_EOL;
    $result = true;
    echo "Display the records" . PHP_EOL;

    return $result;
  }

  function deleteUser($id) : bool {
    echo "Deleting the Records for the User ID: $id";
  }
}

$user1 = new Users();
$user1->fetchUser(101);
$user1->fetchUser(102);
$user1->deleteUser(101);