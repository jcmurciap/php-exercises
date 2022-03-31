<?php
    $servidor="localhost";
    $usuario="root";
    $contrasena="";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        // Inyecta información a la base de datos
        $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'my juego favorito', 'foto.jpg');";
        $conexion->exec($sql); 
        
        echo "Conexión establecida";
    
    } catch(PDOException $error) {
        echo "Hubo un error".$error;
    }


?>