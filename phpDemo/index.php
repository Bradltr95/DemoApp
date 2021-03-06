<!-- index.php - main page for the application, view the forms where we can submit and perform actions. 
You can also create the database and the database_table so it does not have to be created manually. -->
<html> 
<head> 
<title>Hello World</title> 
</head> 
<body> 
<h1 style="text-align:center;">Database Demo</h1> 
<p style="text-align:center;">Testing PHP and MySQL using XAMPP to get info, delete, and view it</p>
<br />
<!-- This form helps us create the database for our application --> 
will take us to the create_db.php page with the 
<form action="create_db.php" method="post"> 
	<b>Press this button to create the database first then create the table after</b>
	<button type="submit" value="Submit">Create the userdb database</button> 
</form> 
<!-- This form helps us create the database table for our application -->  
<form action="create_table.php" method="post"> 
	Create the users table in the userdb. Click this button second to create our tables for the app
	<button type="submit" value="Submit">Create the users table</button> 
</form> 
<!-- This form redirects us along with the information we passed in the text_field to our process.php page 
The information gets submitted to our database. --> 
<form action="process.php" method="post"> 
	Enter a username to the database:
	<input type="text" name="username"> 
	<button type="submit" value="Submit">Submit</button>
</form> 
<!-- This form redirects us along with the information we passed in the text_field to our delete.php page 
The information gets checked against our database, and any errors get reported back to the user. --> 
<form action="delete.php" method="post"> 
	Delete a username from the database: 
	<input type="text" name="delete_name"> 
	<button type="submit" value="Delete">DELETE</button>
</form>
<!-- This button lets us view the entire userdb database -->  
<form action="view.php" method="post"> 
	View the current database
	<button type="submit" value="View">VIEW</button>
</form>
</body> 
</html>
