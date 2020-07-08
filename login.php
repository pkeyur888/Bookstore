<?php 
   ob_start();
    session_start();
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include 'component/head.php';?>

    <title>Register | The Book Shop</title>

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
    
	<h3> Login</h3>
	<hr class="soft"/>

	<div class="row">
		<div class="span4">
			<div class="well">
							<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your e-mail address to create an account.<br/><br/><br/>
			<form role="form"  method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="fname" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="lname" required>
				                        </div>
										
										
										
										
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-birthdate">BirthDate</label>
											<input type="date" name="birthdate" placeholder="BirthDate..." class="form-birthdate form-control" id="bod" required>
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-gender">gender</label>
				                        	<input type="radio" name="gender"  value="m"placeholder="Male..." id="gender">Male
											<input type="radio" name="gender" value="f" placeholder="Female..." id="gender">Female
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-city">City</label>
				                        	<input type="text" name="city" placeholder="City..." class="form-city form-control" id="city" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-address">Address</label>
				                        	<textarea name="address" placeholder="Address..." 
				                        				class="form-address form-control" id="form-address" required></textarea>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-pincode">Pincode</label>
				                        	<input type="number" name="pincode" placeholder="Pincode..." class="form-pincode form-control" id="pincode" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-mobno">Mobile No</label>
				                        	<input type="number" name="mobno" placeholder="Mobile No..." class="form-mobno form-control" id="mobno" required>
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-emailid">Email Id</label>
				                        	<input type="text" name="emailid" placeholder="Email Id..." class="form-first-name form-control" id="emailid" required>
				                        </div>
										
										
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" required>
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-password">Confirm Password</label>
				                        	<input type="password" name="confirmpwd" placeholder="Confirm Password..." class="form-password form-control" id="confirm_password" required>
				                        </div>
										
										
				                       <center> <input type="submit" class="btn" value="Sign me up!" name="submit"></center>
									   
					
					
					</br></br>	
<?php


//session_start();
			if(isset($_POST['submit']))
			{
					$con=mysqli_connect("localhost","root","","bookshop"); 
					

					$fname=$_POST['fname'];
					$lname=$_POST['lname'];          
					$city=$_POST['city'];
					$pin=$_POST['pincode'];
					$addr=$_POST['address'];
					$cpass=$_POST['confirmpwd'];
					$pass=$_POST['password'];
					$mobno=$_POST['mobno'];
					$bdate=$_POST['birthdate'];
					$gender=$_POST['gender'];
					$emailid=$_POST['emailid'];
					if($pass==$cpass)
					{
							$sql1="INSERT INTO `member_info`( `m_email_id`, `m_fname`, `m_lname`, `mdob`, `m_gender`, `m_address`, `m_city`, `m_pincode`, `m_contect_no`, `m_password`, `type`,`status`) VALUES('$emailid','$fname','$lname','$bdate','$gender','$addr','$city','$pin','$mobno','$pass','0','Active')";
							mysqli_query($con,$sql1);
							$c=mysqli_affected_rows($con);
							//echo $c;
							if($c==1)
							{
								echo "<script>alert('Your Registration Sucessfully.!!!!  Please Login..')</script>";
								//header("location:http://localhost/Bookstore/index.php");
							}
					}
					else
					{
						echo "<script>alert('Password And Confirm Password are not Matched....')</script>";
					}
					
				
			}
?>									   

				                    </form>
			
			
			
	  
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form method="post" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text"  placeholder="Email" name="username" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="password" placeholder="Password" required>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <input type="submit" class="btn" value="Sign in" name="insert">
				</div>
			  </div>

			</form>
		</div>
		</div>
	</div>

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
<?php	
 ob_start();
    
	
			

if(isset($_POST['insert']))
		{
			include "connection.php";
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			echo $username;
			echo $password;
			
			$sql="SELECT * FROM `member_info` WHERE `m_email_id`='$username' and `m_password`='$password' and `type`=0";
			$res=mysqli_query($conn,$sql);
			
			while($row=mysqli_fetch_assoc($res))
				{			
					$mid= $row['m_email_id'];
					$status=$row['status'];
					$m=$row['m_id'];
				}
				$nr=mysqli_affected_rows($conn);
			   
				
				
				if($nr==1) 
				{
					
					
					if($status=='Active')
					{
						$_SESSION=array();
						$_SESSION['uname']=$row['m_email_id'];
						$_SESSION['m_id']=$m;
						$_SESSION['status']=true;
						echo "login";
						
						header("Location:http://localhost/Bookstore/index.php?mid=$m");
					}
					else
					{
						echo "<script>alert('Admin Block Your Account....')</script>";
					}
				}
				else
				{		
					echo "<script>alert('Wrong username or password..')</script>";
				}
		}
		
		
		
		
?>	