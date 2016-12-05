<?php
<<<<<<< HEAD
// LOGIN INFO
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
        
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    print 'failure';
} 
// checks if connection is successful 
echo "Connected successfully";
=======

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
>>>>>>> LogonWork

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
        $this->dbname = "vonbulowplanning";
        $this->username = "root";
        $this->password = "root";
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
