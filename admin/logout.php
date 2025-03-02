<?php


use Admin\Lib\Session;

include_once 'autoloader.php';

$session = new Session();

$session->logout();
header("Location: ../index.html");