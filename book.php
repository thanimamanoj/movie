

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'final');
if(isset($_POST['submit']))
{
     $mname = $_POST['movie'];
     $num=$_POST['no_of_seat'];
     $uid= $_POST['usrnm'];
    $query = "INSERT INTO tbl_book(movie_name,no_of_seat,username) values ('$mname','$num','$uid')";
    $query_run=mysqli_query($connection,$query);
    $sqli="UPDATE tbl_book set amount=$num*100 where  movie_name='$mname'&& no_of_seat='$num'";
    mysqli_query($connection,$sqli);
    $pqr="UPDATE movie_desc set totalseat=totalseat-'$num' where movie_name='$mname'";
    mysqli_query($connection,$pqr);

    if($query_run)
    {
    echo '<script type="text/javascript"> alert("data saved") </script>';
    header("location:payment.html");
    }   
    else
    {
        echo '<script type="text/javascript"> alert("data not saved") </script>';
    }  
 }
 ?>
