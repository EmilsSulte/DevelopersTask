<?php
$mysqli = new mysqli("localhost", "visitor", "Databasevi$itor123", "products");

if ($mysqli -> connect_errno){
    echo "Failed to connect to MySQL:" . $mysqli -> connect_error;
    exit();
}
?>
