<?php session_start(); 
		   if(!isset($_SESSION['uname']))
		   { header("Location:http://localhost/Bookstore/Admin/login.php"); }
			
			

			
?>

<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title> Admin | BookHub</title>

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
                                <h4 class="title">Available Order</h4>
                         
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th> ORDER ID</th>
                                    	<th>CUST ID</th>
										<th>BOOK ID</th>
										<th>SELLER ID</th>
                                    	<th>CONTACT NO</th>
                                    	<th>CITY</th>
                                    	<th>EMAIL ID</th>
										<th>PAYMENT TYPE</th>
										
                                    </thead>
                                    <tbody>
											<?php
												include 'connection.php';
												$g=mysqli_query($conn,"SELECT * FROM `order_info`");
												while($res=mysqli_fetch_assoc($g)):
												
											?>
                                        <tr>
												<td><?php echo $res['order_id']; ?></td>
												<td><?php echo $res['m_id']; ?></td>
												<td><?php echo $res['book_id']; ?></td>
												<td><?php echo $res['s_id']; ?></td>
												<td><?php echo $res['mobno']; ?></td>
												<td><?php echo $res['city']; ?></td>
												<td><?php echo $res['email_id']; ?></td>
												<td>COD</td>		
										</tr>
										<?php endwhile; ?>
										
											
                                    </tbody>
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
