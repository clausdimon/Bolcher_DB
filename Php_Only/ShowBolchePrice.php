<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error); }
	$sql = "SELECT
		Birger_Bolcher_Bolcher.Bolche_Name AS Name,
		Birger_Bolcher_Bolcher.Weight,
		Birger_Bolcher_Bolcher.Material_Cost AS 'Material Cost'
		FROM Birger_Bolcher_Bolcher";
	
	$results = mysqli_query($conn, $sql);
	
	echo "<table id='bolcheTable'>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Weight</th>";
	echo "<th>Material Cost</th>";
	echo "<td>Netto Price</td>";
	echo "<td>Sale Price in DKK</td>";
	echo "<td>Sale Price pr. 100 gram in DKK</td>";
	echo "</tr>";
	while ($row = $results->fetch_assoc())
	{
		$nettoPrice = $row['Material Cost'] * 2.5;
		$salePrice = $nettoPrice * 1.25;
		$pricePr100Gram = ($salePrice / $row['Weight'])*100;
		echo "<tr>";
		echo "<td>". $row['Name'] . "</td>";
		echo "<td>". $row['Weight']. "</td>";
		echo "<td>". $row['Material Cost']. "</td>";
		echo "<td>". round($nettoPrice,2) ."</td>";
		echo "<td>". round($salePrice, 2) ."</td>";
		echo "<td>". round($pricePr100Gram, 2) . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);