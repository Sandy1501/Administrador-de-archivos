<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="insertar.php" class="form-table" method="post" enctype="multipart/form-data">
        <h3 class="form--title" style="background-color: #dcd9f8;">Control</h3>
        <div class="container--flex">
            <label for="" class="form--label">Nombre:</label>
            <input type="text" class="form--input " name="nombre" required>
        </div>
        <div class="container--flex">
            <label for="" class="form--label">Categoria:</label>
            <input type="text" class="form--input" name="categoria" required>
        </div>
        <div class="container--flex">
            <label for="" class="form--label">Actividad:</label>
            <input type="text" class="form--input" name="actividad" required>
        </div>
        <div class="container--flex">
            <label for="" class="form--label">Fecha:</label>
            <input type="date" class="form--input" name="fecha" required>
        </div>
        <input type="file" name="documento" class="form--file" required>
        <input type="submit" class="form--submit">
        <button class="boton_1" onclick="window.location.href='registro.php'">Registro</button>
    </form>
</body>
</html>