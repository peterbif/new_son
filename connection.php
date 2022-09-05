<?php
$servername = "localhost";
$username = "peterbif";
$password = "root";
$dbname = "son_2020";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
