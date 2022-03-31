<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // si include2.php no existe, el programa sigue su rumbo
        // cntrario a 'require'
        include_once 'include2.php';
        echo "Estoy en la pagina principal";
    ?>
</body>
</html>