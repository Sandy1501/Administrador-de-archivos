<?php
    $conexion = mysqli_connect("localhost", "root", "", "gestor_doc");

    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $actividad = $_POST["actividad"];
    $fecha = $_POST["fecha"];

    if($_FILES["documento"]) {
        $nombre_base = basename($_FILES["documento"]["name"]);
        $nombre_final = date("d-m-y"). "-". date("H-i-s "). "-" . $nombre_base;
        $ruta = "Academia/" . $nombre_final;
        $subirarchivo = move_uploaded_file($_FILES["documento"]["tmp_name"], $ruta);
        

        if($subirarchivo){
            $insertarSQL = "INSERT INTO documentos(nombre, categoria, actividad, fecha, documento) VALUES ('$nombre', '$categoria', '$actividad', '$fecha', '$ruta')";
            $resultado = mysqli_query($conexion, $insertarSQL);
            
            if($resultado){
                echo "<script>alert('Se ha enviado su registro'); window.location='index.php'</script>";
            }else{
                printf("Errormessage: %s\n", mysqli_error($conexion));
            }
        }
    }else{
        echo "Error al subir archivo";
    }

?>