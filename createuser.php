<?php

include_once 'dbconnection.php';

try {
$Cusername = $_POST['Cusername'];
$Cpassword = $_POST['Cpassword'];
$Cname = $_POST['Cname'];
$Cgroup = $_POST['Cgroup'];

$db = new dbconnection();
$q = "call createnewuser(username:,:password,:name,:group)";
$stmt = $db->prepare($q);
$stmt->execute(array(':username' => $Cusername, ':password' => $Cpassword, ':name' => $Cname, ':group' => $Cgroup));
$result = $stmt->fetch(PDO::FETCH_OBJ);
$count = $stmt->rowCount();
if($count == 1){
    session_start();
    $_SESSION["user"] = $result->use_name;
    print("Profile created! "."Welcome: ".$result->use_name);
}else {
    print("Profile creation failed "." ");
}
} catch (PDOException $e) {
echo $e->getMessage();
}

