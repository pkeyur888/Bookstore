<?php
		include 'connection.php';
		$id=$_GET['id'];
		mysqli_query($conn,"UPDATE `order_info` SET `status`='Deactive' WHERE `order_id`='$id'");
		$f=mysqli_affected_rows($conn);
		if($f==1)
		{
			header("Location:http://localhost/Bookstore/order.php?i=$f&k=1&j=0");
		}
		else
		{
			header("Location:http://localhost/Bookstore/order.php?i=$f&k=1&j=1");
		}
?>