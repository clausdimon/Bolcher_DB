<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SQL-02</title>
	<link rel="stylesheet" href="../Style/style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script>
		function showAll()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showAll").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowAll.php", true);
			xmlhttp.send();
		}
		function showAllRed()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showRed").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowRed.php", true);
			xmlhttp.send();
		}
		function showAllRedBlue()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showRedBlue").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowRedBlue.php", true);
			xmlhttp.send();
		}
		function showAllButRed()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showAllButRedRed").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowAllButRed.php", true);
			xmlhttp.send();
		}
		function showAllWithB()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showAllWithB").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowAllWithB.php", true);
			xmlhttp.send();
		}
		function showAllWithAE() 
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showAllWithAE").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowAllWithAE.php", true);
			xmlhttp.send();
		}
		function showUnder10Gram()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("show10GramOrLess").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/Show10GramOrLess.php", true);
			xmlhttp.send();
		}
		function showBetween10And12()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showBetween10A12").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowBetween10A12.php", true);
			xmlhttp.send();
		}
		function show3Heavy()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("show3Heavy").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/Show3Heavy.php", true);
			xmlhttp.send();
		}
		function showRandom()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("showRando").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../Php_Only/ShowRando.php", true);
			xmlhttp.send();
		}
		function pageLoading() {
			showAll();
			showAllRed();
			showAllRedBlue();
			showAllButRed();
			showAllWithB();
			showAllWithAE();
			showUnder10Gram();
			showBetween10And12();
			show3Heavy();
			showRandom();
		}
	</script>
</head>
<body onload="pageLoading()">
<header>
	<h1>SQL-02</h1>
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
</header>
</body>
</html>

