<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>
    <?php 
        // si require2.php no existe, el programa NO sigue su rumbo
        // distinto a 'include'
        require_once('require2.php'); 
        echo "Estoy en la pagina principal";
    ?>
</body>
</html>