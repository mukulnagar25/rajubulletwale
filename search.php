<?php
// Retrieve form data
$name = $_POST['name'];
$description = $_POST['description'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

// Sanitize form data to prevent SQL injection
$name = htmlspecialchars($name);
$description = htmlspecialchars($description);
$dob = htmlspecialchars($dob);
$gender = htmlspecialchars($gender);

// Create a connection to the MySQL database
$servername = "localhost:3307";  // Replace with your database server name
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password
$dbname = "user";  // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert the data into the database
$sql = "INSERT INTO search (name, description, dob, gender) VALUES ('$name', '$description', '$dob' ,'$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
