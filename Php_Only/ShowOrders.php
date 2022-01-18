<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
	
	$sql = "SELECT
    birger_bolcher_orders.Order_id AS ID,
    birger_bolcher_orders.Order_date AS Dato,
    birger_bolcher_customers.Customer_name AS Name,
    birger_bolcher_orderstatus.OrderStatus AS Status
FROM
    (
        (
            birger_bolcher_orders
        INNER JOIN birger_bolcher_customers ON birger_bolcher_orders.Customer_id = birger_bolcher_customers.Customer_id
        )
    INNER JOIN birger_bolcher_orderstatus ON birger_bolcher_orders.OrderStatus_id = birger_bolcher_orderstatus.OrderStatus_id
    )
ORDER BY
    birger_bolcher_orders.Order_date ASC";
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='ordrerTable'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Dato</th>";
	echo "<th>Name</th>";
	echo "<th>Status</th>";
	echo "</tr>";
	while ($row = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $row['ID']. "</td>";
		echo "<td>". $row['Dato'] . "</td>";
		echo "<td>". $row['Name'] . "</td>";
		echo "<td>". $row['Status']. "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	