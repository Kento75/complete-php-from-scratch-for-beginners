<?php

class Person {

  public $firstName;
  public $lastName;

  public function __construct(string $firstName, string $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function show() {
    print "$firstName : $lastName";
  }
}
