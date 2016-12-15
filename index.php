
<!DOCTYPE html>
<?php include_once './dbconnection.php'; ?>

<html>  
    <head>
        <title>Food Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstylesheet.css">
        <script src="jquery-3.1.1.min.js"></script>
    </head>
    <body>
        
        <h1 class="header">Food Planing</h1>
        <div class="LoginStatus"></div>
        <div class="inputcontainer">
            
            <form id="login" method="POST" action="userverification.php">
                <input class="username" name="username" type="text" placeholder="Username" autocomplete="off"> 
                <input class="password" name="password" type="password" placeholder="Password" autocomplete="off">
                <button class="loginbtn" type="submit">Login</button>
            </form>
        </div>
        <div class="createstatus">
            
        </div>
        <div class="createusercontain">
            <div class="createuserheader">Create user</div>
            <form id="createuser">
                <input class="Cname" name="Cname" type="text" placeholder="name" autocomplete="off"> 
                <input class="Cusername" name="Cusername" type="text" placeholder="Username" autocomplete="off"> 
                <input class="Cpassword" name="Cpassword" type="password" placeholder="Password" autocomplete="off" > 
                <button class="createbutton" type="submit">Submit</button>
            </form>
        </div>
        
        <script>
        $("button.loginbtn").click( function() {
 
  if( $(".username").val() == "" || $(".password").val() == "" )
    $("div.LoginStatus").html("Please enter both username and password");
  else
    $.post( $("#login").attr("action"),
	        $("#login :input").serializeArray(),
			function(data) {
			  $("div.LoginStatus").html(data);
			});
 
	$("#login").submit( function() {
	   return false;	
	});
 
});
        </script>
        
    <script>    
        // this is the id of the form
$("#createuser").submit(function(e) {

    var url = "./createuser.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#createuser").serialize(), // serializes the form's elements.
           success: function(data)
           {
               $(div.createstatus).html(data); // show response from the php script.
           }           
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>
    </body>
</html>