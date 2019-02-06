<!-- Created by Bradley Latreille
Index page of project where you can send information to the database 
using <form> and $_POT
--> 
<head> 
	<meta charset="UTF-8"> 
	<title>Demo App</title> 
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body bgcolor="teal">
	<header>
		<h1>DemoApp</h1>
		<p id="header_p">
		DemoApp to demonstrate my ability to connect to a database, and obtain info.
		</p>
	</header>
	<br/>
	<div class="container">
	<p>Welcome, Please input a Name, Value, Count, and Date below!</p>
	<p>Hit submit when you are ready to submit the data to the database and view  it on the results page.</p>
	<form  name="myForm" action="results.php" method="post">
	<table>
		<tr>
			<td>Name:<input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Value:<input type="text" name="value"></td>
		</tr>
		<tr>
			<td>Count:<input type="text" name="count"></td>
		</tr>
		<tr>
			<td>Date:<input type="text" name="date"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
	</form>
	</div>
	<footer>
	</footer> 
</body> 
</html> 