<?php 
// connect to the db 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

// create connection 
$conn = new mysqli($servername, $username, $password) or die("Unable to create connection"); 

// create the users database
// database name: 'userdb' 
// table name: 'users' 

// store our query command into $sql 
$sql = "CREATE DATABASE userdb"; 
// attempt the query to out database 
if($conn->query($sql) == TRUE) {
	echo "'userdb' Database created successfully"; 
} else {
	echo "Error creating database: " . $create_conn->error; 
}
?> 
<br /><br />  
<a href="index.php">Home Page</a> 
