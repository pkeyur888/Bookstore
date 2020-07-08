<!DOCTYPE html>
<?php
   			session_start();
				
					session_unset();
					session_destroy();
				
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seller Login &amp; Register </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Seller Login &amp; Register Forms</strong></h1>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form name="form"  method="post" class="login-form" >
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <input type="submit" class="btn" name="submit"></br></br>

<?php
				include "connection.php";
				session_start();			
			if(isset($_POST['submit']))
			{
					$username=$_POST['username'];
					$password=$_POST['password'];
					$sql="SELECT * FROM `member_info` WHERE `m_email_id`='$username' and `m_password`='$password' and `type`=1";
					$res=mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($res))
					{
						$m=$row['m_id'];
						$status=$row['status'];
						
					}
						$nr=mysqli_affected_rows($conn);
						//$row=mysqli_fetch_assoc($res);

						if($nr==1)
						{
							//$_SESSION['valid'] = true;
							$_SESSION['username'] = $username;
							$_SESSION['mid'] = $m;
							$msg=$_POST['username'];
							if($status=='Active')
							{
								header("Location:http://localhost/bookstore/Seller/index.php");
							}
							else
							{
								echo "<script> alert('This Account has been Blocked by Administrator!!!') </script>";
							
							}
						}
						else
						{
							echo "<script> alert('Wrong username or password') </script>";
							
						}
			}			
			
		
?>
				                    </form>
			                    </div>
		                    </div>



                        </div>
                         <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form"  method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="fname">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="lname">
				                        </div>




				                        <div class="form-group">
				                        	<label class="sr-only" for="form-birthdate">BirthDate</label>
											<input type="date" name="birthdate" placeholder="BirthDate..." class="form-birthdate form-control" id="bod">
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
				                        	<input type="number" name="mobno" placeholder="Mobile No..." class="form-mobno form-control" id="mobno">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-emailid">Email Id</label>
				                        	<input type="text" name="emailid" placeholder="Email Id..." class="form-first-name form-control" id="emailid">
				                        </div>


				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" required>
				                        </div>

										<div class="form-group">
				                        	<label class="sr-only" for="form-password">Confirm Password</label>
				                        	<input type="password" name="confirmpwd" placeholder="Confirm Password..." class="form-password form-control" id="confirm_password" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-gst_no">GST_No</label>
				                        	<input type="text" name="gst_no" placeholder="GST_No" class="form-password form-control" id="gst_no" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-Pan_no">PAN_No</label>
				                        	<input type="text" name="pan_no" placeholder="PAN_No" class="form-password form-control" id="pan_no" required>
				                        </div>


				                       <center> <input type="submit" class="btn" value="Sign me up!" name="insert"></center>


									</br></br>
									   
										

<?php
			if(isset($_POST['insert']))
			{
					$con=mysqli_connect("localhost","root","","bookshop");
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$city=$_POST['city'];
					$pin=$_POST['pincode'];
					$addr=$_POST['address'];
					$gst_no=$_POST['gst_no'];
					$pan=$_POST['pan_no'];
					$cpass=$_POST['confirmpwd'];
					$pass=$_POST['password'];
					$mobno=$_POST['mobno'];
					$bdate=$_POST['birthdate'];
					$gender=$_POST['gender'];
					$emailid=$_POST['emailid'];
					if($pass==$cpass)
					{
					        $sql1="INSERT INTO `member_info`( `m_email_id`, `m_fname`, `m_lname`, `mdob`, `m_gender`, `m_address`, `m_city`, `m_pincode`, `m_contect_no`, `m_password`, `type`,`status`, `pan_no`, `gst_no`) VALUES ('$emailid','$fname','$lname','$bdate','$gender','$addr','$city','$pin','$mobno','$pass','1','Active','$pan','$gst_no')";
							mysqli_query($con,$sql1);							
							if(mysqli_affected_rows($con)==1)
							{
								echo "<script> alert('Your Account has been Successfully Registered!!!  Please Login to Access your Account..') </script>";
								
							}
					}
					else
					{
						echo "<script> alert('Password and Confirm are not Matched!!!') </script>";
					}



			}
?>

										
									
				                    </form>
			                    </div>
                        	</div>

                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- Footer -->


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
