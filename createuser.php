<?php include_once 'dbconnection.php';


class CreateUser{

    function getuserinfo()
    {
       
        
        $Cname = $_POST['Cname'];
    $Cpassword = $_POST['Cpassword'];
    $Cusername = $_POST['Cusername'];
        if ($Cname == "" && $Cpassword == ""&& $Cusername== ""){
            print_r("User not created!");
        }
        else if($Cpassword != int){
            print_r("password can only contain numbers");
        }
        
        else{
    $this->GetUser($Cname, $Cpassword, $Cusername);
        }
    
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
    function validateUser($name,$pass,$cname)
    {
    $db = new dbconnection();
    $q = "call logon(:username,:password)";
    $stmt = $db->prepare($q);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute(array(':username' => $name, ':password' => $pass));
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
   
    $name =  $result->use_username; 
    $pass =  $result->use_password;
    $user = $name.$pass;
    return $user;
    print_r($user);   
    }
}

$getdata = new CreateUser();

$getdata->getuserinfo();


