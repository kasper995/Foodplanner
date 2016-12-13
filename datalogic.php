<?php include_once 'dbconnection.php';




print_r(get());





function get() {
    $db = new dbconnection();   
    
    $sql= "call getrandommeal()";    
    $stmt = $db->prepare($sql);
    $stmt ->execute(array());   
   
 $result = $stmt->fetch(PDO::FETCH_OBJ);
 $count = $stmt->rowCount();

}




