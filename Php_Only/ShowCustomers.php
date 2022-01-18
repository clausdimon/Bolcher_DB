<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
	
	$sql = "SELECT
    birger_bolcher_customers.Customer_id AS ID,
    birger_bolcher_customers.Customer_name AS Name,
    birger_bolcher_customers.Customer_adress AS Adress
FROM
    birger_bolcher_customers
ORDER BY
    birger_bolcher_customers.Customer_id ASC";
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='customerTable'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Adress</th>";
	echo "</tr>";
	while ($row = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $row['ID']. "</td>";
		echo "<td>". $row['Name'] . "</td>";
		echo "<td>". $row['Adress'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);