<!-- Created by Bradley Latreille.
This function connects to a database, inserts the
information passed from the form in index.php,  and outputs 
it in a nice format.
-->
<?php
$user = 'root'; // default xampp username
$pass = '';	// default xampp password 
$db = 'testdb'; // name of database 

// create and check our connection to testdb
$db_con = new mysqli('127.0.0.1', $user, $pass, $db) or die("Unable to connect(connect.php ln:7)"); 

/* Info gets inserted into DB */
mysqli_query($db_con,"INSERT INTO items (id, name, value, count, date)
VALUES ('null', '$_POST[name]', '$_POST[value]', '$_POST[count]', '$_POST[date]')");

//development check 
//echo "Info Inserted Into DB."; 

// create SQL command to be used with sqli_query
$sql = "SELECT name, value, count, date FROM items ORDER BY name";
// pass the results of the query to $result
$result=mysqli_query($db_con,$sql);

// make sure the row num is greater than 0 
if($result->num_rows > 0) {
	// output specific data using fetch_assoc()
	while($row = $result->fetch_assoc()) {
	?>
	<style> 
	td, th {
		border: 1px solid black; 
		text-align:center; 
		padding: 5px; 
	}
	
	tr:nth-child(even) {
		background-color: #dddddd;
	}
	</style>
	<table> 
		<tr>
			<th>Name</th> 
			<th>Value</th> 
			<th>Count</th>
			<th>Date</th> 
		</tr>
		<tr>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["value"];?></td>
			<td><?php echo $row["count"];?></td>
			<td><?php echo $row["date"];?></td>
		</tr>
	</table>
	<?php
	}
} else {
	// report back to the user if there are no results to display
	echo "0 results"; 
}

// Free up results and close the database connection 
mysqli_free_result($result); 
mysqli_close($db_con); 
?>
<!-- lets users navigate back to the index.php page quickly --> 
<a href="index.php">Return to HomePage</a> 