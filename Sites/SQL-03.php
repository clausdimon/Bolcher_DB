<?php

?>

<!DOCTYPE html>
<html lang="da">
<head>
	<title>SQL-3</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../Javascript/js.js"></script>
</head>
<body>
<header>
	<h1>SQL-3</h1>
</header>
<div class="row">
	<div class="col">
		<button onclick="showAllOnClick()">Vis Alle</button>
		<label for="q">Search</label>
		<input type="text" id="q" onkeyup="searching()">
		
		<div class="row" id="showAllFromButton"></div>
	</div>
	
	
</div>
</body>
</html>

