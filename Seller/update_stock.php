<?php session_start(); 
		   if(!isset($_SESSION['username']))
		   {   header("Location:http:http://localhost/bookstore/Seller/login.php"); }
		$id=$_GET['id']; 
?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Report | Admin | BookHub</title>

</head>
<body>
	<div class="wrapper">

	<?php include 'Sidebar.php';?>

	<div class="main-panel">

		<?php include 'header.php';?>
			
								<div class="container-fluid">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="header">
																<h4 class="title">Add Stock</h4>
														</div>
														<div class="content">
																<form method="post" >
																		<div class="row">
																				<div class="col-md-4">
																						<div class="form-group">
																								<label>Stock</label>
																								<input type="number" class="form-control" name="stock">
																						</div>
																				</div>
																		</div>

																		<input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
																		<div class="clearfix"></div>
																</form>
														</div>
												</div>
										</div>
								</div>
						</div>
						<?php
								if(isset($_POST['submit']))
								{
									include 'connection.php';
									$stock=$_POST['stock'];
									mysqli_query($conn,"UPDATE `book_info` set `qty`='$stock' where `book_id`='$id'");
									$c=mysqli_affected_rows($conn);
									if($c==1)
									{
										echo "<script>alert('Stock Was Update')</script>";
									}
								}
						?>
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
