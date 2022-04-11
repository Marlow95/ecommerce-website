<?php
include('database.php');
print "<h1>Hello World</h1>";
?>

<ul>
    <li>
        <a href="index.php">Home</a>
    </li>

    <li>
    <a href="src/about.php">About</a>
    </li>

</ul>


<?php

$sql = new Database('mysql', '127.0.0.1', '3306', 'testdb', 'marlowc', '');
$sql->connectDatabase();
$sql->queryData("Users");
var_dump($sql->pdo->query('SELECT * FROM Users'));





