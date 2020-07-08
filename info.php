<?php 
   ob_start();
    session_start();
	
	$mid=$_SESSION['m_id'];
	include 'connection.php';
	$r=mysqli_query($conn,"SELECT * FROM `member_info` WHERE `m_id`='$mid'");
	$res=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include 'component/head.php';?>

    <title>Update Information</title>

  </head>
<body>

  <?php include 'component/header.php';?>

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include 'component/sidebar.php';?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    
	<h3>Update Information</h3>
	<hr class="soft"/>

	<div class="row">
		<div class="span4">
			<div class="well">
							<h5>UPDATE YOUR ACCOUNT</h5><br/>
			<br/>
			<form role="form"  method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="fname" value="<?php echo $res['m_fname']; ?>" placeholder="First name..." class="form-first-name form-control" >
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lname" value="<?php echo $res['m_lname']; ?>" placeholder="Last name..." class="form-last-name form-control" >
				                        </div>

										
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-birthdate">BirthDate</label>
											<input type="date" name="birthdate"  value="<?php echo $res['mdob']; ?>"placeholder="BirthDate..." class="form-birthdate form-control" id="bod">
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-gender">gender</label>
				                        	<input type="radio" name="gender"  value="m" <?php if($res['m_gender']=="m") echo 'checked'; ?>>Male
											<input type="radio" name="gender" value="f"<?php if($res['m_gender']=="f") echo 'checked'; ?> >Female
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-city">City</label>
				                        	<input type="text" name="city" value="<?php echo $res['m_city']; ?>"placeholder="City..." class="form-city form-control" id="city" required>
				                        </div>
				                       
										<div class="form-group">
				                        	<label class="sr-only" for="form-pincode">Pincode</label>
				                        	<input type="number" name="pincode" placeholder="Pincode..." value="<?php echo $res['m_pincode']; ?>"class="form-pincode form-control" id="pincode" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-mobno">Mobile No</label>
				                        	<input type="number" name="mobno"value="<?php echo $res['m_contect_no']; ?>" placeholder="Mobile No..." class="form-mobno form-control" id="mobno">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-emailid">Email Id</label>
				                        	<input type="text" name="emailid" placeholder="Email Id..."  value="<?php echo $res['m_email_id']; ?>"class="form-first-name form-control" id="emailid">
				                        </div>
										
										
				                       
										
										
				                       <center> <input type="submit" class="btn" value="Update" name="submit"></center>
									   
					
					
					</br></br>	
<?php


//session_start();
			if(isset($_POST['submit']))
			{
				$con=mysqli_connect("localhost","root","","bookshop"); 
					
					include 'connection.php';
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];          
					$city=$_POST['city'];
					$pin=$_POST['pincode'];
					$mobno=$_POST['mobno'];
					$bdate=$_POST['birthdate'];
					$gender=$_POST['gender'];
					$emailid=$_POST['emailid'];
				mysqli_query($conn,"UPDATE `member_info` SET `m_email_id`='$emailid',`m_fname`='$fname',`m_lname`='$lname',`mdob`='$bdate',`m_gender`='$gender',`m_city`='$city',`m_pincode`='$pin',`m_contect_no`='$mobno' WHERE `m_id`='$mid'");
				if(mysqli_affected_rows($conn)==1)
				{
						echo "<script> alert('Your Profile has been Updated...') </script>";
						header("Location:http://localhost/Bookstore/info.php");
				}
			}
?>									   

				                    </form>
			
			
			
	  
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Change Password</h5>
			<form method="post" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Old Password</label>
				<div class="controls">
				  <input class="span3"  type="password"  placeholder="Old Password" name="oldpwd">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">New Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="pwd" placeholder="New Password">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Confirm Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="cpwd" placeholder="Confirm Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <input type="submit" class="btn" value="Update" name="insert">
				</div>
			  </div>

			</form>
		</div>
		</div>
	</div>
<?php

include "connection.php";


	if(isset($_POST['insert']))
	{
		include "connection.php";
		$oldpass=$_POST['oldpwd'];
		$newpass=$_POST['pwd'];
		$compass=$_POST['cpwd'];
		$r=mysqli_query($conn,"SELECT `m_password` FROM `member_info` WHERE `m_id`='$mid'");
		$k=mysqli_fetch_assoc($r);
		echo $oldpass;
		if($oldpass==$k['m_password'])
		{
			if($newpass == $compass)
			{
				$sql="UPDATE `member_info` SET `m_password`='$newpass' WHERE `m_id`='$mid'";
				mysqli_query($conn,$sql);
				$s=mysqli_affected_rows($conn);
				if($s==1)
				{
					echo "<script> alert('Your Password has been Changed!!!') </script>";
					
				}
			}
			else
			{
				echo "<script> alert('Password and Confirm are not Matched!!!') </script>";
			}
		}
		else
		{
			echo "<script> alert('Old Password not Matched!!!') </script>";
		}
	}
?>
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php include 'component/footer.php';?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>

<span id="themesBtn"></span>
</body>
</html>
