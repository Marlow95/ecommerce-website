<?php
require_once('./ConnectDatabase.php');

interface Crud 
{
    public function getAll(Database $db);
    public function getOne(Database $db, $id);
    //function post(Database $db);
    //function update($Database $db, $id);
    //function deleteOne($Database $db, $id);
}
