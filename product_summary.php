<?php
	session_start();
	include 'connection.php';
	$mid=$_SESSION['m_id'];
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include 'component/head.php';?>

    <title>Register | The Book Shop</title>

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
   
	<h3>  SHOPPING CART <a href="index.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
	<hr class="soft"/>
	
	<form action="process_cart.php" method="POST">
	<table class="table table-bordered">
              <tr>
                  <th>Cart_id</th>
                  <th>Book Name</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Total</th>
				  <th>Option</th>
			 </tr>
                
              
<?php
		$tot=0;
		$sql="SELECT * FROM `cart_info` WHERE `m_id`='$mid'";
		$r=mysqli_query($conn,$sql);
		while($res=mysqli_fetch_assoc($r)):								
?>
			<tr>
			  
                  <th><?php echo $res['cart_id']; ?></th>
                  <th><?php echo $res['book_name']; ?></th>
                  <th><?php echo $res['qty'];?></th>
				  <th><?php echo $res['price']; ?></th>
                  <th><?php echo $res['total']; ?></th>
				  <th><a href="process_cart.php?id=<?php echo $res['cart_id']; ?>&mid=<?php echo $mid; ?>">Delete</a></th>
				  <?php   
						$tot = $tot + $res['total'];
				  ?>
			 </tr>
		<?php  endwhile;?>
<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							<tr>
							<td colspan="5" align="right">
							<h4>Total:</h4>
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							<Br>
								</table>							
							<center>
							<?php
							$x=mysqli_num_rows($r);
							if($x==0)
							{
								echo "<script>alert('Your Cart is Empty...')</script>";
							}
							?>
								<a href="checkout.php" class="btn btn-large pull-right"> CONFIRM & PROCEED<i class="icon-arrow-right"></i></a>
							
							
							
							
         
            </table>


	<a href="index.php" class="btn btn-large pull-left"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<!--<a href="login.php" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>-->

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
