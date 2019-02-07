<?php 
// connect to the db 
require_once "app/connect.php"; 

// query to create our users table in our database 
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
)";
// attempt the query to our database 
if($conn->query($sql) == TRUE) {
	echo "'Users' Table created successfully";
} else {
	echo "Error creating table: " . $conn->error; 
}
?> 
<br /><br />  
<a href="index.php">Home Page</a> 
