<?php
    session_start();
    session_destroy();
    echo "La sesión se destruyó";
?>