<?php
    $servidor="localhost";
    $usuario="root";
    $contrasena="";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        // Lee información a la base de datos
        $sql="SELECT * FROM `fotos`";
        
        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();
        
        $resultado=$sentencia->fetchAll();   
        
        //echo "Conexión establecida";
        print_r($resultado);
    
    } catch(PDOException $error) {
        echo "Hubo un error".$error;
    }


?>