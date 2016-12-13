<?php include_once 'dbconnection.php';



function get() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    print_r($result->mea_name);
    
    print_r(geting($result->mea_number));
}



for ($x = 0; $x <= 2; $x++) {
    get(); print("<br>");
} 
    
function geting($meanumber)
{
    $db = new dbconnection();
    $sql= "call getingredienttomeal($meanumber)";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $ingredient = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
   
    print_r($count);
   
    return $ingredient;
    
}




