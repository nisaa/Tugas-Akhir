<?php

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

include "views/frontend/home.php";

$connector = new App\Connector($driver, $host, $username, $password);
$connector->setDatabase($database);

try
{
    $connector->connect();
}
catch (PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


$user = new App\User;
$user->setUsername('Nisa');
$user->setPassword('1234');
echo $user->getPassword();
// $user->login();
