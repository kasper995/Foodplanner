<?php include_once 'dbconnection.php';


class logic{

function getthreemeals(){
    for ($x = 0; $x <= 2; $x++) {
    $this->getmeal(); print("<br>"); 
}

}
    
function getmeal() {
    $db = new dbconnection();
    $sql= "call getrandommeal()";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $count = $stmt->rowCount();
    if ($count > 0) {
    print("<div class='meals' id='$result->mea_number'>");
    print("<h1 class='mealHeader'>");
    print($result->mea_name);
    print("</h1>");
    print("<br>");
    print("<p class='mealTxt'>you will need:</p> <br>");
    print_r($this->getingredients($result->mea_number)); 
    print("</div>");
    return true;  
     }
 else {
         print("kunne ikke hente ingredienser");
        return false;
    }
   
   
}
function getingredients($meanumber)
{
    $db = new dbconnection();
    $sql= "call getingredienttomeal($meanumber)";
    $stmt = $db->prepare($sql);
    $stmt->execute();
// henter første element i resultet. dette fjerne også samtidigt det første element fra stacken og derfor vil den første row være i denne variabel. dont do this...    
//$ingredient = $stmt->fetch(PDO::FETCH_OBJ); 
    
    $count = $stmt->rowCount();
    if ($count>=1) {
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
    
      //return $string;
        return true;
     }
 else {
         print("kunne ikke hente ingredienser");
        return false;
    }
   
   
    
    
}

}
$getdata = new logic();

$getdata->getthreemeals();



