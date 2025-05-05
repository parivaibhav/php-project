<?php


$host = "localhost:3307";
$db = "darshanhotel";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, $db);

if (!$conn) {
    echo $conn->error;
}
else{
    echo 'connected to database';
}

?>
