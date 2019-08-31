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
$id = $_POST['id'];
$name = $_POST['name'];
$work_id = $_POST['work_id'];
$salary_id = $_POST['salary_id'];

$query = "UPDATE name SET name = '$name', id_work= '$work_id', id_salary='$salary_id' WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header('Location:c.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);