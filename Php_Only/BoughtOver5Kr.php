<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){ die("Connection failed: ". $conn->connect_error); }
	
	$sql = "SELECT
    `Bolche_Name`,
    (
        (
            ((`Material_Cost` * 2.5) * 1.25) / `Weight`
        )
    ) AS 'Price pr. 100 gram in Kroner'
FROM
    birger_bolcher_bolcher";