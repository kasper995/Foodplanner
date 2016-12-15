<?php include_once 'dbconnection.php';


class CreateUser{

    function getuserinfo()
    {
        $Cname = $_POST['Cname'];
    $Cpassword = $_POST['Cpassword'];
    $Cusername = $_POST['Cusername'];
    
    $this->GetUser($Cname, $Cpassword, $Cusername);
    }
    
           
    
    function GetUser($name,$pass,$cname){
        
        try {
    // post of all the information from front page
    

    //database connection
    $db = new dbconnection();
    
    $storedproc = "call createnewuser(:username,:password,:name)";

    //preparing the statement
    $stmt = $db->prepare($storedproc);

    //executes the statement
    $stmt->execute(array(':username' => $name, ':password' => $pass, ':name' => $cname));

    return true;
    }
  
        catch (PDOException $e) {
        return False;
        echo $e->getMessage();
        }        
    }
}

$getdata = new CreateUser();

$getdata->getuserinfo();

