<?php
	require("mysqlConn.php");
	
	$customerID = intval( $_GET['id']);
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error); }
	
	$sql = "SELECT
    birger_bolcher_orders.Order_id AS 'Order ID',
    birger_bolcher_orders.Order_date AS 'Order Date',
    birger_bolcher_customers.Customer_name AS 'Customer Name',
    birger_bolcher_customers.Customer_adress AS 'Customer Adress',
    birger_bolcher_postcodes.CityName AS City
FROM
    (
        (
            (
                birger_bolcher_orders_has_bolcher
            INNER JOIN birger_bolcher_orders ON birger_bolcher_orders_has_bolcher.Order_id = birger_bolcher_orders.Order_id
            )
        INNER JOIN birger_bolcher_customers ON birger_bolcher_orders.Customer_id = birger_bolcher_customers.Customer_id
        )
    INNER JOIN birger_bolcher_postcodes ON birger_bolcher_customers.Postcode = birger_bolcher_postcodes.Postcode
    )
WHERE
    birger_bolcher_orders.Customer_id = $customerID";
	
	$results = mysqli_query($conn,$sql);
	
	echo "<table id='specificCostumer'>";
	echo "<tr>";
	echo "<th>Order ID</th>";
	echo "<th>Order Date</th>";
	echo "<th>Customer Name</th>";
	echo "<th>Customer Adress</th>";
	echo "<th>City</th>";
	echo "</tr>";
	while ($rowCustomer = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $rowCustomer['Order ID'] . "</td>";
		echo "<td>" . $rowCustomer['Order Date'] . "</td>";
		echo "<td>" . $rowCustomer['Customer Name'] . "</td>";
		echo "<td>" . $rowCustomer['Customer Adress'] . "</td>";
		echo "<td>" . $rowCustomer['City'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	