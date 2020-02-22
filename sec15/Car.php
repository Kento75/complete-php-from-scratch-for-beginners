<?php

class Car {

  public $name;
  public $color;

  function sayHello() {
    echo "Hello from Car Class" . PHP_EOL;
  }
}

$car1 = new Car();
$car1->name = "ferrari";
$car1->color = "red";
$car1->sayHello();
echo "$car1->name is $car1->color Color." . PHP_EOL;

$car2 = new Car();
$car2->name = "bmw";
$car2->color = "black";
$car2->sayHello();
echo "$car2->name is $car2->color Color." . PHP_EOL;