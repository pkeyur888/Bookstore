<?php
session_start();
		   if(!isset($_SESSION['uname']))
		     header("Location:http:http://localhost/bookstore/Admin/login.php");
$username=$_SESSION['uname'];



include 'connection.php';
$r=mysqli_query($conn,"SELECT `password` FROM `admin` WHERE `uname`='$username'");
$k=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Admin | BookHub</title>

</head>
<body>

	<div class="wrapper">

		<?php include 'Sidebar.php';?>

		<div class="main-panel">

			<?php include 'header.php';?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Change Password</h4>
                            </div>
                            <div class="content">
                                <form method="post">
                                    <div class="row">                                       
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" placeholder="Old Password" name="oldpass" >
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" placeholder="New Password" name="newpass" >
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="compass" >
                                            </div>
                                        </div>
                                    </div>			
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Change Password"></br></br>
                                </form>	
								
<?php

	if(isset($_POST['submit']))
	{
	
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$compass=$_POST['compass'];
	$j=$k['password'];
	if($j==$oldpass)
	{
		if($newpass == $compass)
		{
			$sql="UPDATE `admin` SET `password`='$newpass' WHERE `uname`='$username'";
			mysqli_query($conn,$sql);
			$s=mysqli_affected_rows($conn);
			if($s==1)
			{
				echo "<script> alert('Your Password has been Changed!!!') </script>";
				//header("Location:http://localhost/Bookstore/Seller/index.php");
			}
		}
		else
		{
			echo "<script> alert('Password and Confirm are not Matched!!!') </script>";
		}
	}
	else
	{
		echo "<script> alert('Old Password are not Correct..') </script>";
	}
	}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>