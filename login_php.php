<?php
session_start();
			if(isset($_POST['insert']))
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
					
					
					$sql1="INSERT INTO `member_info`( `m_email_id`, `m_fname`, `m_lname`, `mdob`, `m_gender`, `m_address`, `m_city`, `m_pincode`, `m_contect_no`, `m_password`, `type`,`status`) VALUES('$emailid','$fname','$lname','$bdate','$gender','$addr','$city','$pin','$mobno','$pass','0','Active')";
					
							mysqli_query($con,$sql1);
							$c=mysqli_affected_rows($con);
							echo $c;
							if($c==1)
							{
								
								//echo "<script>alert('Your Registration Sucessfully....')</script>";
								header("location:http://localhost/Bookstore/index.php");
							}
					
					
				
			}
?>									   