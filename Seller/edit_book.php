<?php
 session_start(); 
		   if(!isset($_SESSION['username']))
		   {  header("Location:http:http://localhost/bookstore/Seller/login.php"); }
		 
		include 'connection.php';
		$id=$_GET['id'];

?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Book Management | Seller| BookHub</title>

</head>
<body>

<div class="wrapper">

	<?php include 'Sidebar.php'; ?>

	<div class="main-panel">

		<?php include 'header.php';
			include 'connection.php';
			$r=mysqli_query($conn,"SELECT * FROM `book_info` WHERE `book_id`='$id'");
			while($k=mysqli_fetch_assoc($r)):
		?>

		<br />
				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="card">
												<div class="header">
														<h4 class="title">Edit Book</h4>
												</div>
												<div class="content">
														<form method="post"  enctype="multipart/form-data" action="edit_code.php">
																<div class="row">
																		<div class="col-md-2">
																				<div class="form-group">
																						<label>Book Id</label>
																						<input type="text" class="form-control" name="id" value="<?php echo $k['book_id']; ?>" readonly="readonly">
																				</div>
																		</div>	
																		<div class="col-md-3">
																				<div class="form-group">
																						<label>Book Title</label>
																						<input type="text" class="form-control" name="title" value="<?php echo $k['book_title']; ?>">
																				</div>
																		</div>
																		<div class="col-md-3">
																				<div class="form-group">
																						<label>Author Name</label>
																						<input type="text" class="form-control" name="author" value="<?php echo $k['book_authorname']; ?>">
																				</div>
																		</div>
																		<div class="col-md-3">
																				<div class="form-group">
																						<label for="exampleInputEmail1">Isbn No</label>
																						<input type="text" class="form-control" name="isbn" value="<?php echo $k['isbn_no']; ?>">
																				</div>
																		</div>
																</div>

																<div class="row">
																		<div class="col-md-4">
																				<div class="form-group">
																						<label>Price</label>
																						<input type="number" class="form-control" name="price" value="<?php echo $k['book_price']; ?>">
																				</div>
																		</div>
																		<div class="col-md-4">
																				<div class="form-group">
																						<label>Language</label>
																						<input type="text" class="form-control" name="language" value="<?php echo $k['book_language']; ?>">
																				</div>
																		</div>
																		
																</div>

																
																				<?php endwhile; ?>
																<input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
																<div class="clearfix"></div>
																			

														</form>
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
