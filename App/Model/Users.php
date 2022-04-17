<?php
require_once('RepositoryInterface.php');


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

        print_r($data->fetchAll(PDO::FETCH_OBJ));
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

        print_r($data->fetch(PDO::FETCH_OBJ));
        
    }

    public static function loginUser(Database $db, $username, $password)
    {
        //add salt and hash later
        if(isset($_POST['login_submit']))
        {
            try {
                $data = $db->pdo->prepare('SELECT * FROM Users WHERE Username = ? AND Password = ?');
                $data->bindParam(1, $username);
                $data->bindParam(2, $password);
                $data->execute();
            } catch(Exception $e){
                echo "<h1 style=\"color: red\">Oops, Something Went Wrong.</h1>";
                exit;
            }

            $logged_in = $data->rowCount();

            if($logged_in === 0)
            {
                //stays on login page
                return header('Location: login.php');
            }
            // redirects to dashboard on successful login
            return header('Location : dashboard.php');
        } 

        echo 'Testing';

    }
}

$users = new Users();
//$users->getAll($db);
$users->getOne($db, 7);
//Users::loginUser($db, 'marlowc', 'test');