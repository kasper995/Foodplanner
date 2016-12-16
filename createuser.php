<?php include_once 'dbconnection.php';


class CreateUser{

    function getuserinfo()
    {
       
        
        $Cname = $_POST['Cname'];
        $Cpassword = $_POST['Cpassword'];
        $Cusername = $_POST['Cusername'];
        
        if ($Cname == "" && $Cpassword == ""&& $Cusername== ""){
            print '"User not created!"';
            return("User not created!");
        }  
        else if (!is_numeric($Cpassword)){
            print 'Password can only contain numbers';
            return ('Password can only contain numbers');
        }
        
        else{
      $this->getUser($Cname, $Cpassword, $Cusername);
        }
        }
    
           
    
    function getUser($name,$pass,$cname){
        
        try {
             
         if ($name == "" && $pass == "" && $cname == ""){
            print '"User not created!"';
            return("User not created!");
        }  
        else if (!is_numeric($pass)){
            print 'Password can only contain numbers';
            return ('Password can only contain numbers');
        }
        
        else{
     
   
    
    // post of all the information from front page
    

    //database connection
    $db = new dbconnection();
    
    $storedproc = "call createnewuser(:username,:password,:name)";

    //preparing the statement
    $stmt = $db->prepare($storedproc);

    //executes the statement
    $stmt->execute(array(':username' => $name, ':password' => $pass, ':name' => $cname));

    return "success";
        }
        
   }
  
        catch (PDOException $e) {
        
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


