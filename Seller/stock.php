<?php session_start(); 
		   if(!isset($_SESSION['username']))
		   {   header("Location:http:http://localhost/bookstore/Seller/login.php"); }
	$m=$_SESSION['mid'];	 
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

			<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Available Books</br>
                                <b>Here you can Find Books Which Stock is less then 10</b></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <tr>
										<th>ID</th>
                                    	<th>NAME OF BOOK</th>
                                    	<th>PRICE</th>
										<th>STOCK</th>
										<th>Update Stock</th>
                                    </tr>
											<?php 
													include 'connection.php';
													$r=mysqli_query($conn,"SELECT * FROM `book_info` WHERE `qty` <10 AND `type`='Sell' AND `m_id`='$m'");
													while($c=mysqli_fetch_assoc($r)):												
											?>
                                        <tr>
													<td><?php echo $c['book_id']; ?></td>
													<td><?php echo $c['book_title']; ?></td>
													<td><?php echo $c['book_price']; ?></td>
													<td><b><?php echo $c['qty']; ?></b></td>
													<td><a class="pe-7s-diskette" href="update_stock.php?id=<?php echo $c['book_id']; ?>"></a></td>
																							
										</tr>
											<?php endwhile;  ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
				
				
				
				
				
				<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Available Books</br>
                                <b>Here you can Find Books Which was Out of Stock</b></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <tr>
										<th>ID</th>
                                    	<th>NAME OF BOOK</th>
                                    	<th>PRICE</th>
										<th>STOCK</th>
										<th>Update Stock</th>
										
                                    </tr>
											<?php 
													include 'connection.php';
													$r=mysqli_query($conn,"SELECT * FROM `book_info` WHERE `qty` <=0");
													while($c=mysqli_fetch_assoc($r)):												
											?>
                                        <tr>
													<td><?php echo $c['book_id']; ?></td>
													<td><?php echo $c['book_title']; ?></td>
													<td><?php echo $c['book_price']; ?></td>
													<td><b><?php echo $c['qty']; ?></b></td>
													<td><a class="pe-7s-diskette" href="update_stock.php?id=<?php echo $c['book_id']; ?>"></a></td>
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
