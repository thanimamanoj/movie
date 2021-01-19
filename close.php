<html>
<body>
	<p> TRANSACTION COMPLETED</p>
	<?php 
	 $i=mysqli_query("$connection,"SELECT max(book_id) from tbl_book "");
      echo $i;
      ?>
</body>
</html>

