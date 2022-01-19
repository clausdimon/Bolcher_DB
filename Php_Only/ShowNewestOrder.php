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
	$orderId = 0;
	
	while ($rowOrder = $resultOrder->fetch_assoc())
	{
		$customerId = $rowOrder['KundeID'];
		$orderId = $rowOrder['ID'];
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
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Adress</th>";
	echo "</tr>";
	while ($rowCustomer = $resultCustomer->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $rowCustomer['ID'] . "</td>";
		echo "<td>" . $rowCustomer['Name'] . "</td>";
		echo "<td>" . $rowCustomer['Adress'] . "</td>";
	}
	echo "</table>";
	echo "<br>";
	
	$sqlBolcherInOrder = "SELECT
    birger_bolcher_bolcher.Bolche_Name AS Name,
    birger_bolcher_colors.Color,
    birger_bolcher_sour_scales.Sour_Scale AS Sourness,
    birger_bolcher_flavor_strengths.Flavor_Strength AS 'Flavor Strength',
    birger_bolcher_flavors.Flavor,
    birger_bolcher_orders_has_bolcher.Weight_Bought AS 'Weight Bought'
FROM
    (
        (
            (
                (
                    (
                        birger_bolcher_orders_has_bolcher
                    INNER JOIN birger_bolcher_bolcher ON birger_bolcher_orders_has_bolcher.Bolche_id = birger_bolcher_bolcher.Bolche_id
                    )
                INNER JOIN birger_bolcher_colors ON birger_bolcher_bolcher.Color_id = birger_bolcher_colors.Color_id
                )
            INNER JOIN birger_bolcher_sour_scales ON birger_bolcher_bolcher.Sour_Scale_id = birger_bolcher_sour_scales.Sour_Scale_id
            )
        INNER JOIN birger_bolcher_flavor_strengths ON birger_bolcher_bolcher.Flavor_Strength_id = birger_bolcher_flavor_strengths.Flavor_Strength_id
        )
    INNER JOIN birger_bolcher_flavors ON birger_bolcher_bolcher.Flavor_id = birger_bolcher_flavors.Flavor_id
    )
WHERE
    birger_bolcher_orders_has_bolcher.Order_id = $orderId";
	
	$resultBolcherInOrder = mysqli_query($conn, $sqlBolcherInOrder);
	
	echo "<table id='BolcherInOrder'>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Color</th>";
	echo "<th>Sourness</th>";
	echo "<th>Flavor Strength</th>";
	echo "<th>Flavor</th>";
	echo "<th>Weight Bought</th>";
	echo "</tr>";
	while ($rowBolcherInOrder = $resultBolcherInOrder->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $rowBolcherInOrder['Name']. "</td>";
		echo "<td>". $rowBolcherInOrder['Color'] . "</td>";
		echo "<td>". $rowBolcherInOrder['Sourness'] . "</td>";
		echo "<td>". $rowBolcherInOrder['Flavor Strength']. "</td>";
		echo "<td>". $rowBolcherInOrder['Flavor']. "</td>";
		echo "<td>". $rowBolcherInOrder['Weight Bought']. "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	
	