<!-- 
Bradley Latreille - Connect to the database, select all the info from the users table in our database, 
check to make sure our inputed value is in the database, and delete it from the users database.
-->
<html> 
<head> 
<title>Delete Page</title> 
</head> 
<body> 
<h1 style="text-align:center;">Delete Page</h1> 
<p style="text-align:center;">Delete usernames from the database.</p>
<br /><br />
<?php
// connect to our database
include "app/connect.php"; 

// create a query to get all our usernames for checking 
$sql = "SELECT username FROM users";
	
// pass the results of the query to $result
$result=mysqli_query($conn,$sql);

// boolean that checks if our deleted username is in the database
$deleted = false;

// fetch the results and move them into the row users array
while($row = $result->fetch_assoc()) {
	// check to see if the username is in the database
	if($row['username'] == $_POST['delete_name']) {
		// use $deleted boolean to delete info from database below
		$deleted = true; 
	}
}
// Let the user know we have deleted the user or if we have failed
if($deleted) {
	// query 
	$sql = "DELETE FROM users WHERE username='".$_POST['delete_name']."'"; 
	// if successful let the user know that we have deleted the record. 
	if($conn->query($sql) == TRUE) {
		// Report back to the user letting them know that we have deleted the value
		echo "Record deleted: " . $_POST['delete_name'] . ""; 
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
?>
<br /><br />
<a href="index.php">Return to homepage</a> 
</body> 
</html>
