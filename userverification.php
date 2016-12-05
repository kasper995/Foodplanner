<?php include_once './dbconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT * FROM plan_b.users";

// sql query
$result = $conn->query($sql);

//$row = mysqli_fetch_assoc($result);

// makes query into associative array
$rows = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $rows[] = $row;
    
if($rows[0]['use_username'] == $username && $rows[0]['use_password'] == $password){
    print("Login succesfull "."Welcome: ".$rows[0]['use_username']);
}
else{
   print("Login failed"); 
}    
    
}



