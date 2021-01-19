<?php

include("dbconnection1.php");
 



$movie_name=$_POST['cat'];
$producer=$_POST['qut'];
$time=$_POST['mtime'];
$director=$_POST['qua'];

	
	$sq="INSERT into movie_desc (movie_name,director,producer,m_time)
	values ('$movie_name','$director',$producer','$mtime')";
	mysqli_query($con,$sq);
	
	

mysqli_close($con);

?>
