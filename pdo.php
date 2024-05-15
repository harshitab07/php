<?php
$server = "localhost";
$username = "username";
$password = "password";
$database = "dbname";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}

$conn = null;

?>