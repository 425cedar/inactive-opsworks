<?php
$servername = "mysql-instance.clfjswptmpv4.us-west-2.rds.amazonaws.com";
$username = "read-only";
$password = "Pa55word";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$result = mysql_query("SELECT * FROM users");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
echo $result;
?>
