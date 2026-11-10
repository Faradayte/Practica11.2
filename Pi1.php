
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pi</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aproximacion del PI</h1>
    <form action="" method="get">
        Ingrese el limite superior:
        <input type="number" name="n" min="1" step="1" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        function aproximarPi($n) {
            $sum = 0;
            $sign = 1;

            echo "<table>";
            echo "<tr><th>n</th><th>x</th></tr>";

            for ($i = 0; $i <= $n; $i++) {
                $sum = $sum + $sign / (2 * $i + 1);
                $x = 4 * $sum;
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $x . "</td>";
                echo "</tr>";
                $sign = $sign * -1;
            }
            echo "</table>";
        }
        if (isset($_GET["n"])) {
            $n = intval($_GET["n"]);

            if ($n > 0) {
                aproximarPi($n);
            } else {
                echo "<p class='error'>Ingresa alguna wea es 0.</p>";
            }
        }
    ?>
</body>
</html>
