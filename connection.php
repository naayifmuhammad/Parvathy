<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "hallticket";
$port = 3307;


$conn = mysqli_connect($hostname, $username, $password, $db_name, $port);

if (!$conn) {

    echo "connection failed";
}

?>