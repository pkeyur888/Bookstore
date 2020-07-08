<?php 
   ob_start();
    session_start();
	$mid=$_SESSION['m_id'];;
	
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
   
	<h3>Payment options</h3>
	<hr class="soft"/>
	
	<div class="row">
		<div class="span9">
			<div class="well">
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:10px;margin-right:160px;font-size:20px;"><a href="order.php?k=0&i=0&j=0">Cash On Delivery</a></div>	                        
		   </div>
		</div>	
	</div>
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
