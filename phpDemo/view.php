<html> 
<head> 
<title>View Page</title> 
</head> 
<body> 
<h1 style="text-algin:center">View Page</h1>
<p style="text-align:center">View our database here</p>
<br /><br />
<?php 
// connect to the database
include "app/connect.php"; 

// create SQL command to be used with sqli_query
$sql = "SELECT * FROM users";
// pass the results of the query to $result
$result=mysqli_query($conn,$sql);

// create our array of users to display
$users = array(); 

// fetch the results and move them into the row users array
while($row = $result->fetch_assoc()){
	// display the results of our usernames
	echo "Username: " . $row['username'] . "<br />";
}
?>
<br />
<a href="index.php">Home Page</a>
</body> 
</html>