<?php
		include 'connection.php';
		$id=$_GET['id'];
		$status=$_GET['status'];
		if($status=='Active')
		{
			$sql="UPDATE `book_info` SET `status`='Deactive' WHERE `book_id`='$id'";
			mysqli_query($conn,$sql);
			$h=mysqli_affected_rows($conn);
		}
		else
		{
			$sql="UPDATE `book_info` SET `status`='Active' WHERE `book_id`='$id'";
			mysqli_query($conn,$sql);
			$h=mysqli_affected_rows($conn);
		}
		if($h==1)
		{
			header("Location:http://localhost/Bookstore/Seller/book_manage.php");
		}

?>
