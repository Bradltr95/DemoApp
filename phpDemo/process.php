<!--
Bradley Latreille - process all our information. We connect to db if the field is not empty, 
and create the record if so.
-->
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
	$username = $_POST["username"];
	
	// require field
	$required = 'username';
	
	// make sure that the user provided information
	if(empty($_POST['username'])) {
		echo "Please make sure you put information in the text field!"; 
	}else{
		// insert information into our users table
		$sql = "INSERT INTO users (username)
		VALUES ('$username')";  
		
		// connect to our db, make sure that this comes after the SQL query because it will assume 
		// the $username variable from the app/connect.php file.
		include "app/connect.php"; 
		
		// check to see if the query works
		if($conn->query($sql) == TRUE) {
			// let the user know it worked
			echo "New record createad successfully:".
			"<p style='color:red;'>" . $_POST['username'] . "</p>"; //--Development test
		} else {
			echo "Error: " . $sql . "<br>";  
		} 
	}
?>
<br /><br />
<a href="index.php">Home Page</a>
</body> 
</html>
