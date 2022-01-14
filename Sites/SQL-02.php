<?php

?>
<!DOCTYPE html>
<html lang="da">
<head>
	<title>SQL-02</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../Javascript/js.js"></script>
</head>
<body onload="pageLoading()">
<header>
	<h1>SQL-02</h1>
</header>
<div class="row">
	<div class="col">
		<h3>Udskriv alle informationer om alle bolcher</h3>
		<div class="row" id="showAll"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navnene på alle de røde bolcher</h3>
		<div class="row" id="showRed"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navnene på alle de røde og de blå bolcher, i samme SQL udtræk</h3>
		<div class="row" id="showRedBlue"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navnene på alle bolcher, der ikke er røde, sorteret alfabetisk</h3>
		<div class="row" id="showAllButRed"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navnene på alle bolcher som starter med et “B”</h3>
		<div class="row" id="showAllWithB"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navene på alle bolcher, hvor der i navnet findes mindst ét “e”</h3>
		<div class="row" id="showAllWithAE"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navn og vægt på alle bolcher der vejer mindre end 10 gram, sorter dem efter vægt, stigende</h3>
		<div class="row" id="show10GramOrLess"></div>
	</div>
	<div class="col">
		<h3>Find og udskriv navnene på alle bolcher, der vejer mellem 10 og 12 gram (begge tal inklusive), sorteret alfabetisk og derefter vægt</h3>
		<div class="row" id="showBetween10A12"></div>
	</div>
	<div class="col">
		<h3>Vælg de tre største (tungeste) bolcher.</h3>
		<div class="row" id="show3Heavy"></div>
	</div>
	<div class="col">
		<h3>Udskriv alle informationer om et tilfældigt bolche, udvalgt af systemet</h3>
		<div class="row" id="showRando"></div>
	</div>
</div>

</body>
</html>

