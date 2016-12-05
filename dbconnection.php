<?php
/**
 * Description of DBConnection
 *
 * @author Annette
 */
class DBConnection{

    private $servername;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    function __construct(){
        $this->servername = "localhost";
        $this->dbname = "plan_b";
        $this->username = "root";
        $this->password = "";
        $this->pdo = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    }
    
    public function prepare($q){
        $stmt=$this->pdo->prepare($q);
        return $stmt;
    }
    
    public function close(){
        unset($this->pdo);
    }

}
