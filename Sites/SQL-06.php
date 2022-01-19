<?php
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<title>SQL-06</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../Javascript/js.js"></script>
</head>
<body onload="loadOrders()">
<header>
	<h1>SQL-06</h1>
</header>
<div class="row">
	<div class="col">
		<h3>Udskriv alle kunderne fra databasen, sorteret efter deres unikke identifikation.</h3>
		<div class="row" id="showAllC"></div>
	</div>
	<div class="col">
		<h3>Udskriv alle ordrer fra databasen, sorteret efter ordredato.</h3>
		<div class="row" id="showAllO"></div>
	</div>
	<div class="col">
		<h3>Udskriv den kunde, der har den seneste ordre, samt udskriv selve ordren</h3>
		<div class="row" id="showLatestOrder"></div>
	</div>
</div>
</body>
</html>
