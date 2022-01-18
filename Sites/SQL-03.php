<?php
	require("../Php_Only/mysqlConn.php");
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error); }
	$options = '';
	$sql = "SELECT * FROM Birger_Bolcher_Colors ORDER BY Color_id ASC ";
	$results = mysqli_query($conn, $sql);
	while ($row = $results->fetch_assoc())
	{
		$options .= '<option value="'. $row['Color_id']. '">'. $row['Color']. '</option>';
	}
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="da">
<head>
	<title>SQL-03</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../Javascript/js.js"></script>
</head>
<body>
<header>
	<h1>SQL-03</h1>
</header>
<div class="row">
	<div class="col">
		<button onclick="showAllOnClick()">Vis Alle</button>
		<label for="q">Search</label>
		<input type="text" id="q" onkeyup="searchBar()">
		<label for="precision">
			<input type="checkbox" id="precision" name="precision" value="precision"> Search with Precision
		</label>
		<select name="Color" onchange="showColor(this.value)">
			<option value="">Select Color</option>
			<?php echo $options; ?>
		</select>
		<div class="row" id="showAllFromButton"></div>
	</div>
	
	
</div>
</body>
</html>

