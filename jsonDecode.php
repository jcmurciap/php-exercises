<?php
    $jsonContent='[
        {"name":"juan", "lastName":"murcia"},
        {"name":"maria", "lastName":"pimentel"},
        {"name":"jesus", "lastName":"peña"}
    ]';

    $jsnDecode=json_decode($jsonContent);
    
    foreach ($jsnDecode as $person => $value) {
        print_r($value->name." "."<br/>");
    }

?>