<?php

session_start();
if(isset($_GET['no_of_seat']))
{
$num=$_GET['no_of_seat'];
}
// Check connection
$x=$num*100;

        echo  " - amount: " . $x. " <br>";
  
  
 
    
    



?>