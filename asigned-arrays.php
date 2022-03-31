<?php
    
    //declara arreglos con indices no numericos
    $indexArray=array("name"=>"Camilo", "age"=>28, "married"=>true);
    // print_r($indexArray);
    //echo $indexArray["name"]."<br />";
    //echo $indexArray["age"];
    
    foreach ($indexArray as $key => $value) {
        
        echo "El valor ".$indexArray[$key]." "."tiene el indice ".$key."<br />";
    }
?>



