<!-- The delete.php files is used to delete entries from the database if the data exists. 
There is also a check to see if there was no data entered into the delete form. If there wasn't 
any data entered we let them know they must enter something first. -->
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
	
// create SQL command to query
$sql = "SELECT username FROM users";
	
// pass the results of the query to the database into $result
$result=mysqli_query($conn,$sql);

// create an array to store all our users for checking. 
$users = array(); 

// a boolean used to make sure that the data we enter is deletable(exists in the db). 
$deletable = false;

// a variable that stores the required fields for the delete form. 
$required = 'delete_name';

// make sure that the user provided information
if(empty($_POST['delete_name'])) {
	// if the user didn't enter any data let them know they have to 
	echo "Please make sure you put information in the text field!";
// if there was data entered we continue with our program 
} else {
	// store the results of the database into our $row array so we 
	// can check to see if our data entered exists. 
	while($row = $result->fetch_assoc()){
		// if any of our usernames match the username entered 
		if($row['username'] == $_POST['delete_name']) {
			// make deletable true
			$deletable = true;
		}
	}
	// If what we entered can be deleted, now we can remove it from the database
	if($deletable) {
		// our query to delete username from users
		$sql = "DELETE FROM users WHERE username='".$_POST['delete_name']."'"; 
		
		// if the query works then we can report back that the record has been 
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
		echo "Either the data you entered is incorrect or we do not have anyone named " . 
		     $_POST['deleted_name'] . " in our database."; 
	}
}
?>
<br /><br />
<a href="index.php">Return to homepage</a> 
</body> 
</html>
