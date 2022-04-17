<?php
require_once('./App/Database.php');
require_once('./App/Config.php');

interface RepositoryInterface
{
    public function getAll(Database $db);
    public function getOne(Database $db, $id);
    //public function post(Database $db);
    //public function updateOne($Database $db, $id);
    //public function deleteOne($Database $db, $id);
}
