<?php

class Database 
{
    public $type;
    public $host;
    public $port;
    public $dbname;
    public $user;
    public $pass;
    //Use pdo variable to make db queries
    public $pdo;

    public function __construct($type, $host, $port, $dbname, $user, $pass)
    {
        $this->type = $type;
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;

    }

    public function connectDatabase()
    {
        try{

            $this->pdo = new PDO(
                $this->type.":host=" . 
                $this->host . ";port=". 
                $this->port . ";dbname=". 
                $this->dbname, $this->user, $this->pass
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "<h5>Database connected.</h5>";

        } catch(PDOException $e){
            
            echo $e->getMessage();
            exit;
        }
    }
}

