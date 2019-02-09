<?php
/* connect.php - A PHP file that contains the necessary code to connect to our userdb so 
we do not have to hardcode connect everytime we want to interact with our database. */

/* database/server variables */
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "userdb"; 

// store connection in $conn variable. 
$conn = new mysqli($servername, $username, $password, $db) or die("Unable to connect");
?>
