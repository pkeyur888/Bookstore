<?php
		include 'connection.php';
		$id=$_GET['id'];
		$sql="DELETE FROM `book_info` WHERE `book_id`='$id'";
		mysqli_query($conn,$sql);
		$c=mysqli_affected_rows($conn);
		if($c==1)
		{
			header("location:http://localhost/Bookstore/Seller/book_manage.php");
		}

?>
