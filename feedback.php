<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include 'component/head.php';?>

    <title> The Book Shop</title>

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
    
	<h3> Feedback</h3>
	<hr class="soft"/>

	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>Give Your Feedback</h5><br/>
			<form role="form"  method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Name</label>
				                        	<input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="fname">
				                        </div>
				                        
										<div class="form-group">
				                    		<label class="sr-only" for="form-emailid">Email Id</label>
				                        	<input type="text" name="emailid" placeholder="Email Id..." class="form-first-name form-control" id="emailid">
				                        </div>
			
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-address">Feedback</label>
				                        	<textarea name="feedback" placeholder="Message..." 
				                        				class="form-address form-control" id="form-address" required></textarea>
				                        </div>
				                       <center> <input type="submit" class="btn"  name="submit"></center>
									   
					
					</br></br>	
<?php


//session_start();
			if(isset($_POST['submit']))
			{
					$con=mysqli_connect("localhost","root","","bookshop"); 
					
					$name=$_POST['name'];
					$emailid=$_POST['emailid'];
					$feedback=$_POST['feedback'];

					mysqli_query($conn,"INSERT INTO `feedback`(`name`, `email_id`, `msg`,`status`) VALUES ('$name','$emailid','$feedback','Active')");
					$n=mysqli_affected_rows($conn);
					if($n==1)
					{
						echo "<script>alert('Your Feedback Message was Inserted...')</script>";
					}
			}
?>									   
				                    </form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		
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
