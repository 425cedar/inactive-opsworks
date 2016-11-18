<!DOCTYPE html>
<html>
<body>

<?php
$servername = "mysql-instance.clfjswptmpv4.us-west-2.rds.amazonaws.com";
$username = "read-only";
$password = "Pa55word";
$dbname = "mysql_php";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT first, last, sex FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> Sex: ". $row["sex"]. " - Name: ". $row["first"]. " " . $row["last"] . "<br>";
        echo "User: ". $row["first"]. " " . $row["last"] . " (". $row["sex"]. ") <br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
