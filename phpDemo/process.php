<!-- process.php - A file used to enter data to our database --> 
<html> 
<head> 
<title>Hello World</title> 
</head> 
<body> 
<h1 style="text-align:center;">Process Page</h1>
<p style="text-align:center;">Create and submit the information to the database</p>
<br />
<?php 
	// get username value using post method 
	$username = $_POST['username'];
	
	// make a variable of required fields to submit our form to process.php
	$required = 'username';
	
	// check to see if the require field is empty
	if(empty($username)) {
		// ask the user to give us some information if they need to 
		echo "Please make sure you put information in the text field!"; 
	}else{
		// store our query into $sql 
		$sql = "INSERT INTO users (username)
		VALUES ('$username')";  
		
		// connect to out database so we can start inserting
		include "app/connect.php"; 
		
		// check to see if our query was successful
		if($conn->query($sql) == TRUE) {
			// let the user know the record was created to the database 
			echo "New record createad successfully:" .
			"<p style='color:green;'>" . $username . "</p>"; 
		} else {
			// report any errors back to the user 
			echo "Error: " . $sql . "<br>";  
		} 
	}
?>
<br /><br />
<a href="index.php">Home Page</a>
</body> 
</html>
