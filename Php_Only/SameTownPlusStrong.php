<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error); }
	
	$city = intval($_GET['c']);
	$sql = "SELECT
    birger_bolcher_customers.Customer_name AS 'Kunde Navn',
    birger_bolcher_customers.Customer_adress AS 'Kunde Adresse',
    birger_bolcher_customers.Postcode,
    birger_bolcher_postcodes.CityName AS 'City'
FROM
    (
        (
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
        INNER JOIN birger_bolcher_flavor_strengths ON birger_bolcher_bolcher.Flavor_Strength_id = birger_bolcher_flavor_strengths.Flavor_Strength_id
        )
    INNER JOIN birger_bolcher_postcodes ON birger_bolcher_customers.Postcode = birger_bolcher_postcodes.Postcode
    )
WHERE
    birger_bolcher_customers.Postcode = $city && birger_bolcher_bolcher.Flavor_Strength_id = 3
GROUP BY
    birger_bolcher_customers.Customer_name
ORDER BY
    birger_bolcher_customers.Customer_name ASC";
	
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='SameCity'>";
	echo "<tr>";
	echo "<th>Kunde Navn</th>";
	echo "<th>Kunde Adresse</th>";
	echo "<th>Postcode</th>";
	echo "<th>City</th>";
	echo "</tr>";
	while ($rowCustomer = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $rowCustomer['Kunde Navn'] . "</td>";
		echo "<td>" . $rowCustomer['Kunde Adresse'] . "</td>";
		echo "<td>" . $rowCustomer['Postcode'] . "</td>";
		echo "<td>" . $rowCustomer['City'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	