<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
	
	$sqlOrder = "SELECT
    birger_bolcher_orders.Order_id AS ID,
    birger_bolcher_orders.Customer_id AS KundeID
FROM
    birger_bolcher_orders
ORDER BY
    birger_bolcher_orders.Order_date
DESC
LIMIT 1";
	$resultOrder = mysqli_query($conn, $sqlOrder);
	
	$customerId = 0;
	
	while ($rowOrder = $resultOrder->fetch_assoc())
	{
		$customerId = $rowOrder['KundeID'];
	}
	
	$sqlKunde = "SELECT
    birger_bolcher_customers.Customer_id AS ID,
    birger_bolcher_customers.Customer_name AS Name,
    birger_bolcher_customers.Customer_adress AS Adress
FROM
    birger_bolcher_customers
    WHERE birger_bolcher_customers.Customer_id = $customerId";
	
	$resultCustomer = mysqli_query($conn, $sqlKunde);
	
	echo "<table id='customerInformation'>";
	
	
	echo "</table>";
	