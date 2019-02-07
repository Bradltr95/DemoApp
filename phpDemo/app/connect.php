<?php
// Php file that connects to the database for us so we dont have to
// hardcode connect everytime we want to submit a query

/* database/server variables */
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "userdb"; 
// store connection in $conn variable. 
$conn = new mysqli($servername, $username, $password, $db) or die("Unable to connect");

?>
