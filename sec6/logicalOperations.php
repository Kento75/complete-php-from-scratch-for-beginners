<?php

// $permission = true;
// $loggedin = true;
// $user = "kento, takano";

// echo($permission and $loggedin) ? "Hello, $user" : "Hello, Gest";
// echo PHP_EOL;

// $admin = false;
// echo($admin or $permission) ? "Hello, Admin User" : "Hello, Power User";
// echo PHP_EOL;


// echo($permission && $loggedin) ? "Hello, $user" : "Hello, Gest";
// echo PHP_EOL;


// こっちを使おう!
$result1 = true && false;
echo ($result1) ? "true" : "false";
echo PHP_EOL;

// こっちは使わないようにしよう!
$result2 = true and false;
echo ($result2) ? "true" : "false";
echo PHP_EOL;

// こっちを使おう!
$result3 = false || true;
echo ($result3) ? "true" : "false";
echo PHP_EOL;

// こっちは使わないようにしよう!
$result4 = false or true;
echo ($result4) ? "true" : "false";
echo PHP_EOL;
