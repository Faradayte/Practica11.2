<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
    <h1>Registrar libro</h1>
    <?php
        $con = mysqli_connect("db", "root", "root_password", "Practica11");
        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            if($_POST){
            $autor = mysqli_real_escape_string($con, $_POST["autor"]);
            $titulo = mysqli_real_escape_string($con, $_POST["titulo"]);
            $fecha = mysqli_real_escape_string($con, $_POST["fecha"]);
            if($_FILES["portada"]["error"] == 0){
                if($_FILES["portada"]["type"] == "image/jpeg"){
                    $imagen = file_get_contents($_FILES["portada"]["tmp_name"]);
                    $imagen = mysqli_real_escape_string($con, $imagen);
                    $sql = "INSERT INTO Libros
                    (Autor, Titulo, FPubli, Imagen)
                    VALUES
                    ('$autor', '$titulo', '$fecha', '$imagen')";
                    if(mysqli_query($con, $sql)){
                        echo "Libro registrado ";
                    }else{
                        die("Error: " . mysqli_error($con));
                    }
                }else{
                    echo "La imagen debe ser jpg";
                }
            }else{
                echo "No se cargo";
            }
        }
        mysqli_close($con);
        ?>
        <form action="registro11-github.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <input type="text" name="autor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de publicacion</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Portada</label>
                <input type="file" name="portada" class="form-control" required>
            </div>
            <input type="submit" name="registrar" value="Registrar libro" class="btn btn-primary">
        </form>
        <br>
        <a href="index11-github.php" class="btn btn-primary">Regresar al inicio</a>
    </div>

</body>
</html>