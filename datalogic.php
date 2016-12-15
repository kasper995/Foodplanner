<?php include_once 'dbconnection.php';

class logic{

function getthreemeals(){
    for ($x = 0; $x <= 2; $x++) {
    getmeal(); print("<br>");
} 
}
    
function getmeal() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();

    print("<div class='meals'>");
    print("<h1 class='mealHeader'>");
    print_r($result->mea_name);
    print("</h1>");
    print("<br>");
    print("<p class='mealTxt'>you will need:</p> <br>");
    print_r(getingredients($result->mea_number)); 
    print("</div>");       
}
    
function getingredients($meanumber)
{
    $db = new dbconnection();
    $sql= "call getingredienttomeal($meanumber)";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $ingredient = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    
     foreach ($stmt as $key => $value) {
        print("<p class='mealTxt'>"); 
        print_r($value['itm_amount']);
        print(" - ");
        print_r($value['ing_name']); 
        print(" Til ");
        print_r($value['itm_price']);
        print(" Dkk <br>");
        print("</p>");
    }
   
}
}


