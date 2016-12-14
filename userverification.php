<?php

include_once 'dbconnection.php';

try {
$username = $_POST['username'];
$password = $_POST['password'];

$db = new dbconnection();
$q = "call logon(:username,:password)";
$stmt = $db->prepare($q);
$stmt->execute(array(':username' => $username, ':password' => $password));
$result = $stmt->fetch(PDO::FETCH_OBJ);
$count = $stmt->rowCount();
if($count == 1){
    print("<script>window.location = './foodplan';</script>");
}else {
    print("Login failed "." ");
}
} catch (PDOException $e) {
echo $e->getMessage();
}
?>