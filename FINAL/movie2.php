

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT movie_name, director,producer,m_time FROM movie_desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "MOVIE name: " . $row["movie_name"]. "\t - DIRECTOR : " . $row["director"]. "\t -PRODUCER:" . $row["producer"]. "\t -SHOW TIME : " . $row["m_time"]."<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>