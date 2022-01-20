<?php
	require("../Php_Only/mysqlConn.php");
	$conn  = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error);}
	
	
	$sql = "SELECT
    birger_bolcher_customers.Customer_name AS 'Kunde Navn',
    birger_bolcher_customers.Customer_adress AS 'Kunde Adresse',
    COUNT(birger_bolcher_orders.Order_id) AS 'Ordre Modtaget'
FROM
    (
        (
            birger_bolcher_orders_has_bolcher
        INNER JOIN birger_bolcher_orders ON birger_bolcher_orders_has_bolcher.Order_id = birger_bolcher_orders.Order_id
        )
    LEFT JOIN birger_bolcher_customers ON birger_bolcher_orders.Customer_id = birger_bolcher_customers.Customer_id
    )
    GROUP BY birger_bolcher_customers.Customer_name
    ORDER BY COUNT(birger_bolcher_orders.Order_id) DESC";
	
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='KunderGrouped'>";
	echo "<tr>";
	echo "<th>Kunde Navn</th>";
	echo "<th>Kunde Adresse</th>";
	echo "<th>Ordre Modtaget</th>";
	echo "</tr>";
	while ($rowCustomer = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $rowCustomer['Kunde Navn'] . "</td>";
		echo "<td>" . $rowCustomer['Kunde Adresse'] . "</td>";
		echo "<td>" . $rowCustomer['Ordre Modtaget'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);