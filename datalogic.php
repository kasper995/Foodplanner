<?php include_once 'dbconnection.php';

//data selection varialble
//$sql = "SELECT mea_name FROM plan_b.meals";
$sql2132= "SELECT * FROM plan_b.meals";

 //$db = new dbconnection();
// sql query
//$result = $db->query($sql2132);


print_r(get());


// makes query into associative array


function get() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    
    $stmt = $db->prepare($sql);
    $stmt ->execute(array());
   
   
 $result = $stmt->fetch(PDO::FETCH_OBJ);
 $count = $stmt->rowCount();
 
if($count == 1){    
    print("sucess");
}else {
    print("fail ");
}
 
 print($result);    
 print("why u empty!?");
 return $result;
}




