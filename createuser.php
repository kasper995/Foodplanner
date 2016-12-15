<?php include_once 'dbconnection.php';


class CreateUser{

    function GetUser(){
        
        try {
    // post of all the information from front page
    $Cname = $_POST['Cname'];
    $Cpassword = $_POST['Cpassword'];
    $Cusername = $_POST['Cusername'];

    //database connection
    $db = new dbconnection();
    
    $storedproc = "call createnewuser(:username,:password,:name)";

    //preparing the statement
    $stmt = $db->prepare($storedproc);

    //executes the statement
    $stmt->execute(array(':username' => $Cusername, ':password' => $Cpassword, ':name' => $Cname));

    }
        catch (PDOException $e) {
        echo $e->getMessage();
        } 
        
        
    }
    
    

}

$getdata = new CreateUser();

$getdata->GetUser();

