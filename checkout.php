<?php 
   ob_start();
    session_start();
	$mid=$_SESSION['m_id'];
	$g=array();
	$h=array();
	$tot=0;
	include 'connection.php';
	$r=mysqli_query($conn,"SELECT `book_id`,`s_id`,`total` FROM `cart_info`");
	while($res=mysqli_fetch_assoc($r))
	{
		$tot = $tot + $res['total'];
		$g[]=$res['book_id'];
		$h[]=$res['s_id'];
	}
	$g=implode(",",$g);
	$h=implode(",",$h);
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
    
	<h3>Shipping Details</h3>
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
				<form role="form"  method="post" class="registration-form" >
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Name</label>
				                        	<input type="text" name="name" placeholder="First name..." class="form-first-name form-control" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-city">City</label>
				                        	<input type="text" name="city" placeholder="City..." class="form-city form-control" id="city" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-address">Address</label>
				                        	<textarea name="addr" placeholder="Address..." 
				                        				class="form-address form-control" id="form-address" required></textarea>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-pincode">Pincode</label>
				                        	<input type="number" name="pincode" placeholder="Pincode..." class="form-pincode form-control" id="pincode" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-mobno">Mobile No</label>
				                        	<input type="number" name="mobno" placeholder="Mobile No..." class="form-mobno form-control" required>
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-emailid">Email Id</label>
				                        	<input type="email" name="emailid" placeholder="Email Id..." class="form-first-name form-control" required>
				                        </div>
				                        
				                       <center> <input type="submit" class="btn" value="Confirm & Proceed" name="submit"></center>					
				         </form>
						 <?php
								if(isset($_POST['submit']))
								{
									$name=$_POST['name'];
									$city=$_POST['city'];
									$addr=$_POST['addr'];
									$pincode=$_POST['pincode'];
									$mobno=$_POST['mobno'];
									$emailid=$_POST['emailid'];
									$dt=date('dd/mm/yyyy');
									echo $mid."<br>".$g."<br>$h";
									mysqli_query($conn,"INSERT INTO `order_info`(`m_id`,`book_id`,`s_id`,`Name`,`billing_address`, `pincode`, `city`, `email_id`,`mobno`,`status`) VALUES ('$mid','$g','$h','$name','$addr','$pincode','$city','$emailid','$mobno','Active')");
									$r=mysqli_affected_rows($conn);
									
									if($r==1)
									{
										
										header('location:payment_details.php');
									}
									else
									{
										echo "<script>alert('Please Insert all Correct Details..')</script>";
									}
								}
						 ?>
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
