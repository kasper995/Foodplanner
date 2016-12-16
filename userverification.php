<?php
include_once 'dbconnection.php';

class UserVerification{
    
    function getUserInfo(){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $this->GetUser($username, $password);
        
    }
    
    function GetUser($usename, $psword){
        
        if(!is_numeric($psword)){
                print("Your Password needs to be a number");
                return ("Your Password needs to be a number");
            }
            else{
        try {
            
    $db = new dbconnection();
    $q = "call logon(:username,:password)";
    $stmt = $db->prepare($q);
    $stmt->execute(array(':username' => $usename, ':password' => $psword));
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    if($count == 1){
    print("<script>window.location = './foodplan';</script>");
    return true;
    }else {
    print("Login failed "." ");
    return false;
        }
    } 
    catch (PDOException $e) {
    echo $e->getMessage();
}
        
        }
    
    }
    
}

$getdata = new UserVerification();

$getdata->getUserInfo();

