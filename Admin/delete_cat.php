<?php
	include 'connection.php';
	$id=$_GET['id'];
	mysqli_query($conn,"DELETE FROM `category` WHERE `category_id`='$id'");
	if(mysqli_affected_rows($conn)==1)
	{
		header("Location:http://localhost/Bookstore/Admin/category.php");
	}
?>