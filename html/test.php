<?php
$servername = '138.197.199.177';
$username = "mturkcrowd";
$password = $_ENV['DB_PASSWORD'];
$dbname = "mturkcrowd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection Failed. \n";
    die("Connection failed: " . $conn->connect_error);
}
 
echo $mysqli->host_info . "\n";

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
$conn->close();
?>
