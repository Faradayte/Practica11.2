
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Compras</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Modelo</th>
            <th>Usuario</th>
            <th>Folio</th>
        </tr>
        <?php
        $con = mysqli_connect("db", "root", "root_password", "autos");
        if(mysqli_connect_errno()){
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        $sql = "SELECT c.id, m.nombre AS Modelo, u.nombre AS Usuario, c.folio FROM compra c, modelo m, usuarios u WHERE c.idModelo = m.id AND c.idUsuario = u.aid";
        $resultado = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Modelo'] . "</td>";
            echo "<td>" . $row['Usuario'] . "</td>";
            echo "<td>" . $row['folio'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($con);
        ?>
    </table>
</body>
</html>
