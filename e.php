
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>e</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Aproximacion de e</h1>
    <form action="" method="get">
        Ingrese el limite superior:
        <input type="number" name="n" min="1" step="1" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
        function factorial($n) {
            $res = 1;
            for ($i = 1; $i <= $n; $i++) {
                $res = $res * $i;
            }
            return $res;
        }
        function aproximarE($n) {
            $sum = 0;
            echo "<table>";
            echo "<tr><th>n</th><th>x</th></tr>";
            for ($i = 0; $i <= $n; $i++) {
                $sum = $sum + 1 / factorial($i);
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $sum . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        if (isset($_GET["n"])) {
            $n = intval($_GET["n"]);
            if ($n > 0) {
                aproximarE($n);
            } else {
                echo "<p class='error'>Ingrese algo que no sea 0.</p>";
            }
        }
    ?>
</body>
</html>
