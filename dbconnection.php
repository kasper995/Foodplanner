<?php
// LOGIN INFO
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
        
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    print 'failure';
} 
// checks if connection is successful 
echo "Connected successfully";




