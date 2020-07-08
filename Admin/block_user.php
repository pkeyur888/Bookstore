<?php
		include 'connection.php';
		$id=$_GET['id'];
		$status=$_GET['status'];
		if($status=='Active')
		{
			$sql="UPDATE `member_info` SET `status`='Deactive' WHERE `m_id`='$id'";
			mysqli_query($conn,$sql);
			$h=mysqli_affected_rows($conn);
		}
		else
		{
			$sql="UPDATE `member_info` SET `status`='Active' WHERE `m_id`='$id'";
			mysqli_query($conn,$sql);
			$h=mysqli_affected_rows($conn);
		}
		if($h==1)
		{
			header("Location:http://localhost/Bookstore/Admin/user.php");
		}

?>
