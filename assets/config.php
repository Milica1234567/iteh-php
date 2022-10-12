<?php

class Database{

    private $dsn="mysql:host=localhost;dbname=medicamea";
    private $dbuser="root";
    private $dbpassword="";


    public $conn;

    public function __construct()
    {
        try{
            $this->conn= new PDO($this->dsn, $this->dbuser, $this->dbpassword);
            
        }catch(PDOException $e){
            echo "Error: " .$e->getMessage();
        }
        return $this->conn;
    }

}

$ob=new Database();

?>