<html>
<head>
	<title> TICKET CONFIRMED</title>
</head>
<body>
<h1> TICKET CONFIRMED</h1>
<div>
<img src="tick.jpg" width="600" height= "300">
</div>


</body>
</html>
<?php
session_start();
include("dbconnection1.php");
$username=$_POST['una'];
$x=rand();


$sql="SELECT max(book_id),movie_name ,no_of_seat from tbl_book where username='$username' ";
$result=mysqli_query($con,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "MOVIE name: " . $row["movie_name"]. "\t -TICKET ID : " ."$x"."<br><br>";
    }
}
?>