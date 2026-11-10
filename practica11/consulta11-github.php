<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>registro</title>
</head>
<body>
        <div class="container">
        <h1>Libros registrados</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Portada</th>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Fecha de publicacion</th>
            </tr>
            <?php
            $con = mysqli_connect("db", "root", "root_password", "Practica11");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $sql = "SELECT * FROM Libros";
            $resultado = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td><img width='100' src='data:image/jpeg;base64,"
                . base64_encode($row["Imagen"]) . "'></td>";
                echo "<td>" . $row["Autor"] . "</td>";
                echo "<td>" . $row["Titulo"] . "</td>";
                echo "<td>" . $row["FPubli"] . "</td>";
                echo "</tr>";
            }
            mysqli_close($con);
            ?>
        </table>
        <a href="index11-github.php" class="btn btn-primary">Regresar al inicio</a>
        <a href="registro11-github.php" class="btn btn-primary">Registrar otro libro</a>
    </div>
</body>
</html>