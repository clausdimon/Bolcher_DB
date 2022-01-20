<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error); }
	
	$sql = "SELECT
    birger_bolcher_customers.Customer_name AS 'Kunde Navn',
    SUM(
        (
            (
                (
                    birger_bolcher_bolcher.Material_Cost * 2.5
                ) * 1.25
            ) / birger_bolcher_bolcher.Weight
        ) * birger_bolcher_orders_has_bolcher.Weight_Bought
    ) / 100 AS 'Total Price'
FROM
    (
        (
            (
                birger_bolcher_orders_has_bolcher
            INNER JOIN birger_bolcher_orders ON birger_bolcher_orders_has_bolcher.Order_id = birger_bolcher_orders.Order_id
            )
        INNER JOIN birger_bolcher_customers ON birger_bolcher_orders.Customer_id = birger_bolcher_customers.Customer_id
        )
    INNER JOIN birger_bolcher_bolcher ON birger_bolcher_orders_has_bolcher.Bolche_id = birger_bolcher_bolcher.Bolche_id
    )
GROUP BY
    birger_bolcher_customers.Customer_name
HAVING
    SUM(
        (
            (
                (
                    birger_bolcher_bolcher.Material_Cost * 2.5
                ) * 1.25
            ) / birger_bolcher_bolcher.Weight
        ) * birger_bolcher_orders_has_bolcher.Weight_Bought
    ) / 100 > 5
ORDER BY
    SUM(
        (
            (
                (
                    birger_bolcher_bolcher.Material_Cost * 2.5
                ) * 1.25
            ) / birger_bolcher_bolcher.Weight
        ) * birger_bolcher_orders_has_bolcher.Weight_Bought
    ) / 100 DESC";
	
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='over5Kr'>";
	echo "<tr>";
	echo "<th>Kunde Navn</th>";
	echo "<th>Total Price</th>";
	echo "</tr>";
	while ($rowCustomer = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $rowCustomer['Kunde Navn'] . "</td>";
		echo "<td>" . $rowCustomer['Total Price'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	