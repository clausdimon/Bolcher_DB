<?php
    require("mysqlConn.php");

    $conn = new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT 
        Birger_Bolcher_Bolcher.Bolche_id AS ID, 
        Birger_Bolcher_Bolcher.Bolche_Name AS Name, 
        Birger_Bolcher_Colors.Color, 
        Birger_Bolcher_Bolcher.Weight, 
        Birger_Bolcher_Sour_Scales.Sour_Scale AS 'Flavor Sourness', 
        Birger_Bolcher_Flavor_Strengths.Flavor_Strength AS 'Flavor Strength',
        Birger_Bolcher_Flavors.Flavor,
        Birger_Bolcher_Bolcher.Material_Cost AS 'Material Cost' 
        FROM
            ((((Birger_Bolcher_Bolcher
            INNER JOIN Birger_Bolcher_Colors ON Birger_Bolcher_Bolcher.Color_id = Birger_Bolcher_Colors.Color_id)
            INNER JOIN Birger_Bolcher_Sour_Scales ON Birger_Bolcher_Bolcher.Sour_Scale_id = Birger_Bolcher_Sour_Scales.Sour_Scale_id)
            INNER JOIN Birger_Bolcher_Flavor_Strengths ON Birger_Bolcher_Bolcher.Flavor_Strength_id = Birger_Bolcher_Flavor_Strengths.Flavor_Strength_id)
            INNER JOIN Birger_Bolcher_Flavors ON Birger_Bolcher_Bolcher.Flavor_id = Birger_Bolcher_Flavors.Flavor_id)";
    $results = mysqli_query($conn, $sql);

        while ($row = $results->fetch_assoc())
        {
            echo "<tr>
            <td>". $row['ID']. "</td>
            <td>". $row['Name'] . "</td>
            <td>". $row['Color'] . "</td>
            <td>". $row['Weight']. "</td>
            <td>". $row['Flavor Sourness']. "</td>
            <td>". $row['Flavor Strength']. "</td>
            <td>". $row['Flavor']. "</td>
            <td>". $row['Material Cost']. "</td>
            </tr>";
        }
		mysqli_close($conn);