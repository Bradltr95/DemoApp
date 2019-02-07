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
//-------------------------------------------------------------------
// Get all our information from the database to test against deleted.
//-------------------------------------------------------------------
// create SQL command to be used with sqli_query
$sql = "SELECT * FROM users";
// pass the results of the query to $result
$result=mysqli_query($conn,$sql);

// create our array of users to display
$users = array(); 

// check to see if the user was deleted
$deleted = false;

// fetch the results and move them into the row users array
while($row = $result->fetch_assoc()){
	if($row['username'] == $_POST['delete_name']) {
		$deleted = true; 
	}
}
// Let the user know we have deleted the user or if we have failed
if(!$deleted) {
	echo "Not deleted! Try checking that the username was spelt correctly?"; 
} else {
	// let the user know what we deleted
	echo "Deleted:" . "<p style='color:red;'>" . $_POST['delete_name'] . "</p>";
}
?>
<br /><br />
<a href="index.php">Return to homepage</a> 
</body> 
</html>