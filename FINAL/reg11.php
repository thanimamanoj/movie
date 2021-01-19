<?php
$servername = "localhost";

$password = "";
$dbname = "my_db1";
$admn_no=$_POST['admn'];
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['usrnm'];
$password=$_POST['psw'];
// Create connection
$conn = new mysqli($servername, "root", "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_login1 (username)
VALUES ($username)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>