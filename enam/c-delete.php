<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fahreza";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_GET['name'];
$id = $_GET['id'];

$query = "DELETE FROM name WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header('Location:c.php?deleted='.$name);
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);