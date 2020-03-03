<?php

require_once 'Person2.php';

$p = new Person();

$p->lastName = '山田';
$p->firstName = '太郎';

print "lastName: {$p->lastName}" . PHP_EOL;
print "firstName: {$p->firstName}" . PHP_EOL;
