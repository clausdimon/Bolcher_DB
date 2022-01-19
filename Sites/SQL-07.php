<?php
	require("../Php_Only/mysqlConn.php");
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error); }
	$options = '';
	$sql = "SELECT
			birger_bolcher_bolcher.Bolche_id AS ID,
			birger_bolcher_bolcher.Bolche_Name AS Name
		FROM
			birger_bolcher_bolcher
		ORDER BY birger_bolcher_bolcher.Bolche_id ASC";
	$results = mysqli_query($conn, $sql);
	while ($row = $results->fetch_assoc())
	{
		$options .= '<option value="' . $row['ID'] . '">' . $row['Name'] . ' </option>';
	}
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<title>SQL-07</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../Javascript/js.js"></script>
</head>
<body onload="sql07PageLoad()">
<header>
	<h1>SQL-07</h1>
</header>
<div class="row">
	<div class="col">
		<h3>Udskriv alle kunder fra databasen, som har afgivet en ordre, samt lad det fremgå, hvor mange ordrer hver kunde har liggende i systemet.</h3>
		<div class="row" id="customersWithOrders"></div>
	</div>
	<div class="col">
		<h3>Udskriv igen alle kunder fra databasen, hvor alle deres ordrer udskrives sammen med kunden.</h3>
	</div>
	<div class="col">
		<h3>Udskriv alle de kunder, der har købt “Blå Perler”.</h3>
		<button onclick="showBolche(8)">Show Blå Perle Købere</button>
	</div>
	<div class="col">
		<h3>Opret en dropdownliste, med alle bolchenavne, samt en submitknap.</h3>
		<select id="BolcheName" onchange="showBolche(this.value)">
			<option value="">Select Bolche</option>
			<?php echo $options; ?>
		</select>
		<div class="row" id="showTableWithAllOrdersAndCustomers"></div>
	</div>
</div>
</body>
</html>