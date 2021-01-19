<!DOCTYPE html>
<html>
<head>
<style>
  *{
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#778899 ;
  color: black;
}

.topnav a.active {
  background-color:#87CEFA;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1 style="color: red;"><center>M4UCINEMAS</center></h1><br>
<div class="topnav">
  <a class="active" href="main2.php">Home</a>
  <a href="movie2.php">MOVIES</a>
  <a href="book.html">BOOK TICKET</a>

  <div class="topnav-right">
     <a href="admin.html">Admin login</a>
     <a href="wlogin1.html">Login</a>
     <a href="addregister1.php">Sign up</a>
  </div>
</div>

  <div class="row">
  <div class="column">
    <img src="bigil1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="helen.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="marjavaan.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>