<?php
include_once('RepositoryInterface.php');
include_once('./Database.php');

class Users implements RepositoryInterface
{
    function getAll(Database $db)
    {
        try {
            $data = $db->pdo->query('SELECT * FROM Users');
        } catch(Exception $e){
            echo "<h1 style=\"color: red\">Oops, Sorry I Can't Query Data.</h1>";
            exit;
        }

        foreach($data as $users)
        {
            print_r($users);
        }
    }

    public function getOne(Database $db, $id)
    {

        try {
            $data = $db->pdo->prepare('SELECT * FROM Users WHERE UserID = ?');
            $data->bindParam(1, $id);
            $data->execute();
        } catch(Exception $e){
            echo "<h1 style=\"color: red\">Oops, Sorry I Can't Query Data.</h1>";
            exit;
        }

        foreach($data as $users)
        {
            print_r(json_encode($users));
        }
    }
}

//$users = new Users();
//$users->getAll($db);
//$users->getOne($db, 1);