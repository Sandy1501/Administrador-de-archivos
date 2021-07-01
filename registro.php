<?php

$conexion = mysqli_connect("localhost", "root", "", "gestor_doc");

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Administracion de acrchivos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
</head>
  <body style="background-color: #fdf9c4;">
    <div class="container">
        <div class="row">
            <div class="col" style="left: 5px; background-color: #dcd9f8;">
                <blockquote class="blockquote text-center"><h3 class="mb-1">Archivos</h3></blockquote>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        <td style="text-align:center;">Id_documento</td>
                        <td style="text-align:center;">Nombre</td>
                        <td style="text-align:center;">Categoria</td>
                        <td style="text-align:center;">Actividad</td>
                        <td style="text-align:center;">Fecha</td>
                        <td style="text-align:center;">Documento</td>
                        <td style="text-align:center;">Editar</td>
                        <td style="text-align:center;">Eliminar</td>
                    </tr> 

                    <?php 
                    
                    $sql="SELECT * from documentos";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){

                    ?>
                    <tr>
                        <td><?php echo $mostrar['id_documento'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['categoria'] ?></td>
                        <td><?php echo $mostrar['actividad'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['documento'] ?></td>
                        <td style="text-align:center;"><span class="btn btn-warning btn-sm"><i class="far fa-edit"></i></span></td>
                        <td style="text-align:center;"><span class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></span></td>
                    </tr> 
                    <?php 
                    } 
                    ?>  
                </table>
                <button class="boton_1" onclick="window.location.href='index.php'">Regresar</button>
            </div>
        </div>     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
