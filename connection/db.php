<?php
$connection = new mysqli("localhost", "root", "Onekanda31", "onekblog");
if($connection->connect_errno){
    echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
    }
?>