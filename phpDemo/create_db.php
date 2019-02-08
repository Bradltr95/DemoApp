<!-- create_db.php - a file used to create a database that will work for 
our application. This way anyone that wants to use our project doesn't have to 
create the database and data table themselves. 
@database name: 'userdb' 
@database table name: 'users' 
--> 
<?php 
// database variables 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

// create new connection using the database variables 
$conn = new mysqli($servername, $username, $password) or die("Unable to create connection"); 

// store our query command into $sql 
$sql = "CREATE DATABASE userdb"; 

// check to see if the query was successful to our data_table. 
if($conn->query($sql) == TRUE) {
	// let the user know we have delete the database
	echo "'userdb' Database created successfully"; 
} else {
	// report any errors back to the user 
	echo "Error creating database: " . $conn->error; 
}
?> 
<!-- provide a link back to the home page --> 
<br /><br />  
<a href="index.php">Home Page</a> 
