<!-- create_table.php - a file used to create the database table for our project 
so that the user does not have to do it manually themselves. We can use $conn->error 
to let the user know if the table was already created --> 
<?php 
// connect to the db 
require_once "app/connect.php"; 

// query to create our users table in our database 
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
)";

// attempt the query to our database 
if($conn->query($sql) == TRUE) {
	// let the user know if the table was created 
	echo "'Users' Table created successfully";
} else {
	// report any errors back to the user
	echo "Error creating table: " . $conn->error; 
}
?> 
<!-- provide a link back to the home page --> 
<br /><br />  
<a href="index.php">Home Page</a> 
