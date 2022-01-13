<?php
	require("mysqlConn.php");
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
	
	$sql = "SELECT
    Birger_Bolcher_Bolcher.Bolche_id AS ID,
    Birger_Bolcher_Bolcher.Bolche_Name AS Name,
    Birger_Bolcher_Bolcher.Weight
FROM
    (
        (
            (
                (
                    Birger_Bolcher_Bolcher
                INNER JOIN Birger_Bolcher_Colors ON Birger_Bolcher_Bolcher.Color_id = Birger_Bolcher_Colors.Color_id
                )
            INNER JOIN Birger_Bolcher_Sour_Scales ON Birger_Bolcher_Bolcher.Sour_Scale_id = Birger_Bolcher_Sour_Scales.Sour_Scale_id
            )
        INNER JOIN Birger_Bolcher_Flavor_Strengths ON Birger_Bolcher_Bolcher.Flavor_Strength_id = Birger_Bolcher_Flavor_Strengths.Flavor_Strength_id
        )
    INNER JOIN Birger_Bolcher_Flavors ON Birger_Bolcher_Bolcher.Flavor_id = Birger_Bolcher_Flavors.Flavor_id
    )
WHERE
    Birger_Bolcher_Bolcher.Weight < 10
ORDER BY
    Birger_Bolcher_Bolcher.Weight ASC";
	
	$results = mysqli_query($conn, $sql);
	echo "<table>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Weight</th>";
	echo "</tr>";
	while ($row = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td> " . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Weight'] .  "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($conn);