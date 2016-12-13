<?php

include_once 'dbconnection.php';

try {
// post of all the information from front page
$Cname = $_POST['Cname'];
$Cpassword = $_POST['Cpassword'];
$Cusername = $_POST['Cusername'];


//database connection
$db = new dbconnection();

//stored procedure is called here
$storedproc = "call createnewuser(:username,:password,:name)";
//preparing the statement
$stmt = $db->prepare($storedproc);

//executes the statement
$stmt->execute(array(':username' => $Cusername, ':password' => $Cpassword, ':name' => $Cname));

$haha = array(':username' => $Cusername, ':password' => $Cpassword, ':name' => $Cname);

print_r($haha);

}
catch (PDOException $e) {
echo $e->getMessage();
}
