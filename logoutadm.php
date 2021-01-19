<?php
session_start();
session_destroy();
if(isset($_session['usrnm']))
{
	
}
header("location:adminlogin1.html");
exit();
?>
