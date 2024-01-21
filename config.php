<?php
$db_host = 'localhost:3307';  // e.g., 'localhost'
$db_user = 'root';
$db_password = '';
$db_name = 'booking_system';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
