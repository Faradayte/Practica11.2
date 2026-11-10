<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro completao</title>
</head>
<body>
    <h1>Registro completado<h/1>
    <?php
    $con =mysqli_connect("db","Selicy","53981240","Eden");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    $id = mysqli_real_escape_string($con, $_POST["id"]);
    $Name = mysqli_real_escape_string($con, $_POST["Name"]);
    $Type = mysqli_real_escape_string($con, $_POST["Type"]);
    $Damage = mysqli_real_escape_string($con, $_POST["Damage"]);
    $effect = mysqli_real_escape_string($con, $_POST["effect"]);
    $rarity = mysqli_real_escape_string($con, $_POST["rarity"]);
    $mana_cost = mysqli_real_escape_string($con, $_POST["mana_cost"]);
    $shots = mysqli_real_escape_string($con, $_POST["shots"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $base = mysqli_real_escape_string($con, $_POST["base"]);
    $sql = "INSERT INTO Spells (id, Name, Type, Damage, effect, rarity, mana_cost, shots, description, base) VALUES ('$id', '$Name','$Type','$Damage','$effect','$rarity','$mana_cost','$shots','$description','$base');";
    if(!mysqli_query($con, $sql)){
        die('Error:' . mysqli_error($con));
    } else {
        echo "<p>Se ha registrado correctamente </p>";
    }
    mysqli_close($con);
    ?>
    <a href="php02.php">Regresar al form</a>
</body>
</html>