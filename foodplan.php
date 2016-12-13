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
        <h1 class="foodplanHeader">Meals</h1>
        
        <form id="getMeals" method="POST" action="datalogic.php">
            <button class="mealsBtn">Get Meals</button>
        </form>
        
        <div class="aquiredMeals"></div>
        
        
        <script>
        $("button.mealsBtn").click( function() {

    $.post( $("#getMeals").attr("action"),
	        $("#getMeals :input").serializeArray(),
			function(data) {
			  $("div.aquiredMeals").html(data);
			});
 
	$("#getMeals").submit( function() {
	   return false;	
	});
 
});
        </script>
    </body>
</html>

