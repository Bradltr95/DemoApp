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

	if($deleted) {
		$sql = "DELETE FROM users WHERE username='".$_POST['delete_name']."'"; 
				
		if($conn->query($sql) == TRUE) {
			echo "Record deleted: " . $_POST['delete_name'] . ""; 
		} else {
			echo "Error deleting record: " . $conn->error;
		}
	} else {
		echo "Unable to delete " . $_POST['delete_name'] . ""; 
	}
}
?>
<br /><br />
<a href="index.php">Return to homepage</a> 
</body> 
</html>
