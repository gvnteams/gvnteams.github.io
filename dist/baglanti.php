<?php
$servername = "localhost";
$database = "ebook";
$username = "root";
$password = "Pm342042";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>