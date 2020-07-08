<?php
session_start();
$username=$_SESSION['username'];

	if(isset($_POST['submit']))
	{
		//echo $username;
	$uname=$_POST['uname'];

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$addr=$_POST['addr'];
	$city=$_POST['city'];
	$bdate=$_POST['bdate'];
	$pin=$_POST['pin'];
	$gst=$_POST['gst'];
	$pan=$_POST['pan'];


		include "connection.php";
		
		mysqli_query($conn,"UPDATE `member_info` SET `m_email_id`='$uname',`m_fname`='$fname',`m_lname`='$lname',`mdob`='$bdate',`m_address`='$addr',`m_city`='$city',`m_pincode`='$pin',`pan_no`='$pan',`gst_no`='$gst' WHERE `m_email_id`='$username'");
		$s=mysqli_affected_rows($conn);
		//echo $s;
		
		if($s==1)
		{
			header("Location:http://localhost/bookstore/Seller/profile.php");
		}
		
	}

?>
