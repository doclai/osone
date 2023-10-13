<?php

include 'auth.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
$conn->connect_error;

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myMetrics";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully\n";
} else {
	echo "Error creating database: " . $conn->error, PHP_EOL;
}

// Create table
$create_table = "CREATE TABLE IF NOT EXISTS myMetrics.data (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, tp INT, fn INT, fp INT, tn INT)";
$conn->query($create_table);


$insert = "INSERT INTO myMetrics.data (tp, fn, fp, tn) VALUES (?, ?, ?, ?)";

if ($conn->execute_query($insert, [$_POST["tp"],$_POST["fn"],$_POST["fp"],$_POST["tn"]]) === TRUE) {
	echo "Data inserted successfully\n";
} else {
	echo "Error inserting data\n";
}

$conn->close();

echo "<a href='../' class='button'>Back to previous screen</a>\n"

?>

