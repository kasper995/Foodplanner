<?php include_once 'dbconnection.php';

get();

function get() {
  $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    print_r($result->mea_name);
 
}





