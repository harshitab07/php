<?php
$server = "localhost";
$username = "root";
$password = "password";
$database = "mydb";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error) {
    die("Connection failed ".$conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$conn->close();

?>