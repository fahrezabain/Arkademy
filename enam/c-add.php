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
$name = $_POST['name'];
$work_id = $_POST['work_id'];
$salary_id = $_POST['salary_id'];

$query = "INSERT INTO name (name,id_work,id_salary) VALUES ('$name','$work_id','$salary_id')";

if (mysqli_query($conn, $query)) {
    header('Location:c.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);