<?php
session_start();
session_destroy();
if(isset($_session['uname']))
{
	
}
header("location:wlogin1.html");
exit();
?>
