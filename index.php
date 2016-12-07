
<!DOCTYPE html>


<?php include_once './dbconnection.php'; ?>

<html>  
    <head>
        <title>Food Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstylesheet.css">
    </head>
    <body>
        
        <h1 class="header">Food Planing</h1>
        
        <div class="inputcontainer">
            <form method="POST" action="userverification.php">
                <input class="username" name="username" type="text" placeholder="Username"> 
                <input class="password" name="password" type="password" placeholder="Password">
                <button class="loginbtn" type="submit">Login</button>
            </form>
        </div>
        
        <div class="createusercontain">
            <form method="POST" action="createuser.php">
                <input class="Cname" name="Cname" type="text" placeholder="name"> 
                <input class="Cusername" name="Cusername" type="text" placeholder="Username"> 
                <input class="Cpassword" name="Cpassword" type="password" placeholder="Password"> 
                <input class="Cgroup" name="Cgroup" type="text" placeholder="User group"> 
                <button class="createbutton" type="submit">Submit</button>
            </form>
        </div>
        
        <div class="underconstruction"></div>
    </body>
</html>