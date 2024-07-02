<?php
$servername = "app-chmurowe-db.mysql.database.azure.com";
$username = "adminuser";
$password = "Haslo123";
$dbname = "address_book";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
