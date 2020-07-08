<?php
		include 'connection.php';
		$id=$_GET['id'];
		$status=$_GET['status'];
		if($status=='Active')
		{
		$sql="UPDATE `feedback` SET `status`='Deactive' WHERE `feedback_id`='$id'";
		mysqli_query($conn,$sql);
		$h=mysqli_affected_rows($conn);

		}
		else
		{
			$sql="UPDATE `feedback` SET `status`='Active' WHERE `feedback_id`='$id'";
			mysqli_query($conn,$sql);
			$h=mysqli_affected_rows($conn);

		}
		if($h==1)
		{
			header("Location:http://localhost/Bookstore/Admin/feedback.php");
		}

?>
