<?php session_start(); 
		   if(!isset($_SESSION['username']))
		     header("Location:http:http://localhost/bookstore/Seller/login.php");
		 $mid=$_SESSION['mid'];
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Available Books</h4>
                                <p class="category">Here you can Find all available Books Details and also Delete and Modify Book Details</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <tr>
										<th>ID</th>
                                    	<th>NAME OF BOOK</th>
                                    	<th>PRICE</th>
                                    	<th>AUTHORNAME</th>
                                    	<th>LANGUAGE</th>
										<th>CATEGORY</th>
										<th>ISBN_NO</th>
										<th>STATUS</th>
										<th>IMAGE</th>
										<th>BLOCK BOOK</th>
										<th>ACTION</th>		
                                    </tr>
											<?php 
													include 'connection.php';
													$r=mysqli_query($conn,"SELECT * FROM `book_info` WHERE `type`='Sell' AND `m_id`='$mid'");
													while($c=mysqli_fetch_assoc($r)):												
											?>
                                        <tr>
													<td><?php echo $c['book_id']; ?></td>
													<td><?php echo $c['book_title']; ?></td>
													<td><?php echo $c['book_price']; ?></td>
													<td><?php echo $c['book_authorname']; ?></td>
													<td><?php echo $c['book_language']; ?></td>
													<td><?php  $id=$c['category_id'];
																$g=mysqli_query($conn,"SELECT `category_name` FROM `category` WHERE `category_id`='$id'");
																$e=mysqli_fetch_assoc($g);
															    echo $e['category_name'];  ?>
													</td>
													<td><?php echo $c['isbn_no']; ?></td>
													<td><?php echo $c['status']; ?></td>
													<td><img src="../<?php echo $c['book_img']; ?>" height="50px" width="50px"></td>
													<td><a class="fa fa-lock" href="block_book.php?id=<?php echo $c['book_id']; ?>&status=<?php echo $c['status']; ?> "></a></td>
													<td>  <a class="fa fa-pencil" href="edit_book.php?id=<?php echo $c['book_id']; ?> "></a>&nbsp&nbsp&nbsp&nbsp
														  <a class="fa fa-trash" href="delete_book.php?id=<?php echo $c['book_id']; ?> "></a>
													</td>											
										</tr>
											<?php endwhile;  ?>
                                </table>
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
