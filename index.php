<?php 
require_once('database.php');
?>

<h1>The Elite Store</h1>

<?php include_once('header.php'); ?>

<?php

$db = new Database('mysql', '127.0.0.1', '3306', 'testdb', 'marlowc', '');
$db->connectDatabase();
$db->getOneColumn("Users", "UserName");
//var_dump($sql->pdo->query('SELECT * FROM Users'));





