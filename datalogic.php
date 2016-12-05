<?php include_once './dbconnection.php';

//data selection varialble
//$sql = "SELECT mea_name FROM plan_b.meals";
$sql= "SELECT * FROM plan_b.meals";
$sql2= "call plan_b.getrandommeal)";

// sql query
$result = $conn->query($sql);

//get();


// makes query into associative array
$rows = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $rows[] = $row;   
}

print("<pre>");
print_r($rows);

print("</pre>");

function get() {
    $temp = $conn->prepare($ql2);
   $temp->setFetchMode(PDO::FETCH_OBJ);
$temp ->execute;

 $result = $temp->fetchAll();
 
    return $result;
}




