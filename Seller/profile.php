<?php
 session_start(); 
		   if(!isset($_SESSION['username']))
		   {  header("Location:http:http://localhost/bookstore/Seller/login.php"); }
		 


$username=$_SESSION['username'];


include 'connection.php';
$r=mysqli_query($conn,"SELECT * FROM `member_info` WHERE `m_email_id`='$username'");
$k=mysqli_fetch_assoc($r)
?>

<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title><?php echo $k['m_fname']; ?> Profile | Seller | BookHub</title>

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
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="update_profile.php">
                                    <div class="row">                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" name="uname" value="<?php echo $k['m_email_id']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" name="fname" value="<?php echo $k['m_fname']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $k['m_lname']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="addr" value="<?php echo $k['m_address']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $k['m_city']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Birthdate</label>
                                                <input type="date" class="form-control" name="bdate" value="<?php echo $k['mdob']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PinCode</label>
                                                <input type="number" class="form-control" placeholder="PinCode" name="pin" value="<?php echo $k['m_pincode']; ?>">
                                            </div>
                                        </div>
                                    </div>
									
									
									 <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>GST No</label>
                                                <input type="text" class="form-control" placeholder="Gst No" name="gst" value="<?php echo $k['gst_no']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pan No</label>
                                                <input type="text" class="form-control" placeholder="Pan_No" name="pan" value="<?php echo $k['pan_no']; ?>">
                                            </div>
                                        </div>
                                        
                                    </div>
												
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Update Profile">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-0.jpg" alt="..."/>

                                      
                                    </a>
                                </div>
                                <p class="description text-center"> <?php echo $k['m_fname']; ?><br>
                                                    <?php echo $k['m_city']; ?>--<?php echo $k['m_pincode']; ?> <br>
                                </p>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
