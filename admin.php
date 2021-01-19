<?php
session_start();
include("dbconnection1.php");
$username=$_POST['usrnm'];
$password=$_POST['psw'];

$sql="SELECT * from admin where user='$username' and pass='$password'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n>0)  	
{
   	$_SESSION['usrnm']=$username;
   	echo "WELCOME";
	header("location:adminlogin1.php");   	
}
else	
{ 	
	?>
	<script> alert("invalid email or password");
	window.location.href="admin.html";
	</script>
	<?php
}
mysqli_close($con);
?>