<?php session_start(); 
		   if(!isset($_SESSION['uname']))
		   { header("Location:http://localhost/Bookstore/Admin/login.php"); }
		 
?>
<!doctype html>
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

				<br />

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Category</h4>
                                <p class="category">Here you can see all the Categories and Add, Delete the Category</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th>ID</th>
                                    	<th>Category</th>
										<th>Delete</th>
                                    </thead>
                                    <tbody>
											<?php 
													include 'connection.php';
													$r=mysqli_query($conn,"SELECT * FROM `category`");
													while($c=mysqli_fetch_assoc($r)):
													
											?>
                                        <tr>
                                        	<td><?php echo $c['category_id']; ?></td>
											<td><?php echo $c['category_name']; ?></td>
											<td><a class="fa fa-trash" href="delete_cat.php?id=<?php echo $c['category_id']; ?> "></a> </td>
                                        </tr>
											<?php endwhile;  ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

						<div class="container-fluid">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="header">
																<h4 class="title">Add New Category</h4>
														</div>
														<div class="content">
																<form method="post" action="add_category.php">
																		<div class="row">
																				<div class="col-md-12">
																						<div class="form-group">
																								<label>Category Name</label>
																								<input type="text" class="form-control" name="category">
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
