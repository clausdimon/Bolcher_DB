<?php
	require("../Php_Only/mysqlConn.php");
	$conn  = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error);}
	
	$sql = "SELECT
    birger_bolcher_customers.Customer_name AS 'Kunde Navn',
    birger_bolcher_customers.Customer_adress AS 'Kunde Adresse',
    birger_bolcher_orders.Order_id AS 'Order ID',
    birger_bolcher_orders.Order_date AS 'Order Date',
    birger_bolcher_bolcher.Bolche_id AS 'Bolche ID',
    birger_bolcher_bolcher.Bolche_Name AS 'Bolche Navn',
    birger_bolcher_flavors.Flavor AS 'Bolche Flavor'
FROM
    (
        (
            (
                (
                    birger_bolcher_orders_has_bolcher
                INNER JOIN birger_bolcher_orders ON birger_bolcher_orders_has_bolcher.Order_id = birger_bolcher_orders.Order_id
                )
            LEFT JOIN birger_bolcher_customers ON birger_bolcher_orders.Customer_id = birger_bolcher_customers.Customer_id
            )
        INNER JOIN birger_bolcher_bolcher ON birger_bolcher_orders_has_bolcher.Bolche_id = birger_bolcher_bolcher.Bolche_id
        )
    INNER JOIN birger_bolcher_flavors ON birger_bolcher_bolcher.Flavor_id = birger_bolcher_flavors.Flavor_id
    )
ORDER BY
    birger_bolcher_customers.Customer_name,
    birger_bolcher_orders.Order_date ASC";
	
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='tableWithAllOrdersAndCustomers'>";
	echo "<tr>";
	echo "<th>Kunde Navn</th>";
	echo "<th>Kunde Adresse</th>";
	echo "<th>Ordre ID</th>";
	echo "<th>Ordre Date</th>";
	echo "<th>Bolche Navn</th>";
	echo "<th>Bolche Flavor</th>";
	echo "</tr>";
	while ($rowCustomer = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $rowCustomer['Kunde Navn'] . "</td>";
		echo "<td>" . $rowCustomer['Kunde Adresse'] . "</td>";
		echo "<td>" . $rowCustomer['Order ID'] . "</td>";
		echo "<td>" . $rowCustomer['Order Date'] . "</td>";
		echo "<td data-id='" . $rowCustomer['Bolche ID'] . "'>" . $rowCustomer['Bolche Navn'] . "</td>";
		echo "<td>" . $rowCustomer['Bolche Flavor'] . "</td>";
	}
	echo "</table>";
	echo "<br>";
	mysqli_close($conn);
	