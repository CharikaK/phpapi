<?php
class Database{
// specify your database credentials
private $host= "localhost";
private $db_name ="phpapi";
private $username = "root";
private $password ="";
private $conn;

    public function getConnection(){
        $this->conn = null;
        
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
            $this->conn->exec("set names utf8");
            //echo "Connection success";
        }
        catch(PDOException $exception){
            echo "Connection error: ".$exception->getMessage();
        }
        return $this->conn;
    }
}

// How to test if the connection is working.
//$a = new Database ();
//$a->getConnection();
