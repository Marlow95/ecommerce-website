<?php
require_once('Database.php');

$db = new Database('mysql', '127.0.0.1', '3306', 'testdb', 'marlowc', '');
echo $db->connectDatabase();
ob_start();
session_start();