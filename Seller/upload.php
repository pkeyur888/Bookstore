<?php session_start();
		   if(!isset($_SESSION['username']))
		   {	     header("Location:http:http://localhost/bookstore/Seller/login.php"); }


?>
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>Seller/BookHub</title>

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
														<h4 class="title">Add New Book</h4>
												</div>
												<div class="content">
														<form method="post" enctype="multipart/form-data">
																<div class="row">
																		<div class="col-md-5">
																				<div class="form-group">
																						<label>Book Title</label>
																						<input type="text" class="form-control" name="title">
																				</div>
																		</div>
																		<div class="col-md-3">
																				<div class="form-group">
																						<label>Author Name</label>
																						<input type="text" class="form-control" name="author">
																				</div>
																		</div>
																		<div class="col-md-4">
																				<div class="form-group">
																						<label for="exampleInputEmail1">Isbn No</label>
																						<input type="text" class="form-control" name="isbn">
																				</div>
																		</div>
																</div>

																<div class="row">
																		<div class="col-md-6">
																				<div class="form-group">
																						<label>Price</label>
																						<input type="number" class="form-control" name="price">
																				</div>
																		</div>
																		<div class="col-md-6">
																				<div class="form-group">
																						<label>Language</label>
																						<input type="text" class="form-control" name="language">
																				</div>
																		</div>
																</div>

																<div class="row">
																		<div class="col-md-4">
																				<div class="form-group">
																						<label>Category</label>
																						<select class="form-control" id="book_category" name="category">
																						<?php
																							include 'connection.php';
																							$r=mysqli_query($conn,"SELECT * FROM `category`");
																							while($c=mysqli_fetch_assoc($r)):
																						?>
																							<option value="<?php echo $c['category_id']; ?>"> <?php echo $c['category_name']; ?></option>
																						<?php endwhile; ?>
    																				</select>
																				</div>
																		</div>
																		<div class="col-md-3">
																				<div class="form-group">
																						<label>Qty</label>
																						<input type="number" class="form-control" name="qty">
																				</div>
																		</div>
																		<div class="col-md-4">
																				<div class="form-group">
																						<label>Book Image</label>
																						<input type="file" class="form-control" name="image">
																				</div>
																		</div>
																</div>
																<div class="row">
																			<div class="col-md-13">
																				<div class="form-group">
																						<label>Book Description</label>
																						<input type="text" class="form-control" name="desc" maxlength="10000">
																				</div>
																		</div>
																<div>
																<input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
																<div class="clearfix"></div>
														</form>
												</div>
										</div>
								</div>
						</div>
				</div>

<?php
			
					if(isset($_POST["submit"]))
					{
								$conn=mysqli_connect("localhost","root","","bookshop");

								$title=$_POST['title'];
								$author=$_POST['author'];
								$isbn=$_POST['isbn'];
								$price=$_POST['price'];
								$language=$_POST['language'];
								$category=$_POST['category'];
								$desc=$_POST['desc'];
								$qty=$_POST['qty'];
								$mid=$_SESSION['mid'];
								
								$allowedExt = array("jpeg","jpg","png");
								$img = explode(".",$_FILES['image']['name']);
							
							
								move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
								$b_img = "images/".$_FILES['image']['name'];

								mysqli_query($conn,"INSERT INTO `book_info`(`m_id`, `book_img`, `book_title`, `book_price`, `book_authorname`, `book_language`, `category_id`, `isbn_no`, `qty`, `description`,`type` ,`status`) VALUES ('$mid','$b_img','$title','$price','$author','$language','$category','$isbn','$qty','$desc','Sell','Active')");

								$c=mysqli_affected_rows($conn);
								if($c==1)
								{
										echo "<script>alert('BOOK HAS BEEN SUCESSFULLY INSERTED...')</script>";
								}
								else
								{
									echo "<script>alert('THERE IS SOME PROBLEM DURING UPLOADING YOUR BOOK SO PLEASE TRY AGAIN AFTER FEW MINUTES!!! OR FILL ALL THE FIELD CORRECTLY')</script>";
								}

					}
				
	
?>


     

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
