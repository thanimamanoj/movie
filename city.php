<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'final');
$username=$_POST['usrnm'];
if(isset($_POST['submit']))
{
     $mname = $_POST['movie'];
    $num=$_POST['no_of_seat'];
    $query = "SELECT city_id from city_desc where username='$username'";
    $query_run=mysqli_query($connection,$query);
    $sqli="UPDATE tbl_book set amount=$num*100 where  movie_name='$mname'&& no_of_seat='$num')";
    mysqli_query($connection,$sqli);
    if($query_run)
    {
    echo '<script type="text/javascript"> alert("data saved") </script>';
    }   
    else
    {
        echo '<script type="text/javascript"> alert("data not saved") </script>';
    }  
 }
 ?>