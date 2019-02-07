<?php
/* database/server variables */
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "userdb"; 
// store connection in $conn variable. 
$conn = new mysqli($servername, $username, $password, $db) or die("Unable to connect");

?>