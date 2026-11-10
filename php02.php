
<!DOCTYPE html>
<html>
<head>
    <title>Registro spells</title>
</head>
<body>

    <h1>Registro spells</h1>

    <form action="php03.php" method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id"> <br>
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name"> <br>
        <label for="Type">Type:</label>
        <input type="text" name="Type" id="Type"> <br>
        <label for="Damage">Damage:</label>
        <input type="number" name="Damage" id="Damage"> <br>
        <label for="effect">Effect:</label>
        <input type="text" name="effect" id="effect"> <br>
        <label for="rarity">Rarity:</label>
        <input type="text" name="rarity" id="rarity"> <br>
        <label for="mana_cost">Mana cost:</label>
        <input type="number" name="mana_cost" id="mana_cost"> <br>
        <label for="shots">Shots:</label>
        <input type="number" name="shots" id="shots"> <br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description"> <br>
        <label for="base">Base:</label>
        <input type="number" name="base" id="base" min="0" max="1"> <br>
        <br>
        <input type="submit" value="Registrar">
    </form>
    <p><a href ="php04.php">Revisar registro</a>
</body>
</html>