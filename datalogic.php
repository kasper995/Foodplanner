<?php include_once 'dbconnection.php';



function getFirstMeal() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    print_r($result->mea_name);
 
}

function getSecondMeal() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    print_r($result->mea_name);
 
}

function getThirdMeal() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    print_r($result->mea_name);
 
}
getFirstMeal(); print("<br>");
getSecondMeal(); print("<br>");
getThirdMeal(); print("<br>");


