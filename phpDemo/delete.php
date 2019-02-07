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
$sql = "SELECT username FROM users";
// pass the results of the query to $result
$result=mysqli_query($conn,$sql);

// create our array of users to display
$users = array(); 

// check to see if the user was deleted
$deleted = false;

// require field
$required = 'delete_name';

// make sure that the user provided information
if(empty($_POST['delete_name'])) {
	echo "Please make sure you put information in the text field!"; 
} else {
	// fetch the results and move them into the row users array
	while($row = $result->fetch_assoc()){
		if($row['username'] == $_POST['delete_name']) {
			$deleted = true;
		}
	}
	// if what we entered can be delete, now we can remove it from the database
	if($deleted) {
		// our query to delete username from users
		$sql = "DELETE FROM users WHERE username='".$_POST['delete_name']."'"; 
		
		// if the query works then we can report back that the record has been deleted
		if($conn->query($sql) == TRUE) {
			echo "Record deleted: " .
			"<p style='color:red;'>" . $_POST['delete_name'] . "</p>"; 
		} else {
			// let our users know if there was no deleted record
			echo "Error deleting record: " . $conn->error;
		}
	} else {
		// if the user enters a value that is not in the database
		// we can let them know here that their value isn't in the 
		// database if it doesn't bass the checks above. 
		echo "Unable to delete " . $_POST['delete_name'] . ""; 
	}
}
?>
<br /><br />
<a href="index.php">Return to homepage</a> 
</body> 
</html>
