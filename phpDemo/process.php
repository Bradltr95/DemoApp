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
	
	// variable that stores the required text fields to submit the form
	$required = 'username';
	
	// check to see if the require field is empty
	if(empty($_POST['username'])) {
		// ask the user to give us some information
		echo "Please make sure you put information in the text field!"; 
	}else{
		// insert query to inster unsername into users
		$sql = "INSERT INTO users (username)
		VALUES ('$username')";  
		
		// connect to out database so we can start inserting
		include "app/connect.php"; 
		
		// check to see if the query works
		if($conn->query($sql) == TRUE) {
			// let the user know it worked
			echo "New record createad successfully:".
			"<p style='color:green;'>" . $_POST['username'] . "</p>"; //--Development test
		} else {
			// report any errors
			echo "Error: " . $sql . "<br>";  
		} 
	}
?>
<br /><br />
<a href="index.php">Home Page</a>
</body> 
</html>
