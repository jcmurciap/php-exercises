<?php
    if($_POST){
        print_r($_POST);
        print_r($_FILES['archivo']['name']);
        // mueve un archivo cargado a una nueva locación
        move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Values input file</title>
</head>
<body>
    <form action="inputFileValues.php" enctype="multipart/form-data" method="post">
        
        Imagen:
        <!-- Adjuntar imagenes y archivos sin importar la extensión -->
        <input type="file" name="archivo" id=""><br/>
        
        <!-- Envia el formulario -->
        <input type="submit" name="enviar" value="Enviar información"><br/>

    </form>
    
</body>
</html>








