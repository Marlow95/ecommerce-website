<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: /application/json');

include('./Model/Users.php');

$users = new Users();

//Get All Users Query
$users->getAll($db);