<?php
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<title>SQL-08</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../Javascript/js.js"></script>
</head>
<body onload="loadingSQL08()">
<header>
	<h1>SQL-08</h1>
</header>
<div class="row">
	<div class="col">
		<h3>Hent alle ordrer fra kunde nummer 4 ud.</h3>
		<div class="row" id="specificKunde"></div>
	</div>
	<div class="col">
		<h3>Lav en liste over alle kunder der har købt mere end 100g bolcher.</h3>
		<div class="row" id="ListOf100Over"></div>
	</div>
	<div class="col">
		<h3>Lav en liste over alle kunder der bor i samme by som dig og har købt stærke bolcher.</h3>
		<div class="row" id="SameTownList"></div>
	</div>
	<div class="col">
		<h3>Lav en liste over alle kunder og gruppér dem efter antal ordre.</h3>
		<div class="row" id="Grouping"></div>
	</div>
	<div class="col">
		<h3>Lav en liste over alle dem der har købt for over 5kr.</h3>
		<div class="row" id="over5krBought"></div>
	</div>
	<div class="col">
		<h3>Lav en liste over alle dem der har købt en eller flere blå haj bolcher</h3>
		<div class="row" id="blueShark"></div>
	</div>
</div>