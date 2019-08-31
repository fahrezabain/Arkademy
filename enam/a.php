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

$query = "SELECT name.name AS name, work.name As work, salary FROM name LEFT JOIN work ON name.id_work = work.id LEFT JOIN category ON name.id_salary = category.id";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<pre>";
    	print_r($row);
    }
} else {
    echo "0 results";
}

mysqli_close($conn);