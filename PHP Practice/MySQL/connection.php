<?php


$serverName = "localhost";
$userName = "root";
$password = "";

$conn = new mysqli($serverName, $userName, $password);

if ($conn->connect_error) {
    die("Connetion faild: " .$conn->connect_error);
    echo "<br>";
}else {
    echo "Connected Successfully";
    echo "<br>";
}


$sql = "CREATE DATABASE myDB";
if ($conn->query($sql)) {
    echo "Databse create successfully!";
    echo "<br>";
}
else {
    echo "error creating database" .$conn->error;
    echo "<br>";
}


$conn->close();

