
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registered Spells</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Damage</th>
            <th>Effect</th>
            <th>rarity</th>
            <th>mana cost</th>
            <th>shots</th>
            <th>description</th>
            <th>base</th>
        </tr>
        <?php
        $con = mysqli_connect("db", "Selicy", "53981240", "Eden");
        if(mysqli_connect_errno()){
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM Spells;";
        $resultado = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Type'] . "</td>";
            echo "<td>" . $row['Damage'] . "</td>";
            echo "<td>" . $row['effect'] . "</td>";
            echo "<td>" . $row['rarity'] . "</td>";
            echo "<td>" . $row['mana_cost'] . "</td>";
            echo "<td>" . $row['shots'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['base'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($con);
        ?>
    </table>
    <p><a href="php02.php">Regresar al form</a>
</body>
</html>
