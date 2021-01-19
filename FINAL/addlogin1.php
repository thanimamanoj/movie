<?php
session_start();
include("dbconnection1.php");
$username=$_POST['usrnm'];
$password=$_POST['psw'];
$qr="INSERT into user_city(user_name) values ('$username')";
mysqli_query($con,$qr);
$sql="SELECT * from tbl_login where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n>0)  	
{
   	$_SESSION['usrnm']=$username;
   	echo "WELCOME";
	header("location:logouty1.php");   	
}
else	
{ 	
	?>
	<script> alert("invalid email or password");
	window.location.href="wlogin1.html";
	</script>
	<?php
}
mysqli_close($con);
?>