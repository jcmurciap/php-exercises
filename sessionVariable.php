<?php
    // mantiene informacion mientras el navegador este abierto
    // una ves el navegado se cierra, las variables se cierran
    
    session_start();

    if(isset($_SESSION["usuario"])){
            // variable tipo sesion
        echo "Sesion iniciada"."<br />";
        echo "Usuario: ".$_SESSION["usuario"].", status: ".$_SESSION["status"]."<br />";
 
    }else{
        echo "No hay datos";
    }
    
?>

